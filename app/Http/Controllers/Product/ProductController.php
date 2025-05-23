<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use BladeUIKit\Components\DateTime\Carbon;

class ProductController extends Controller
{
    public function showAddProductForm(Request $request)
    {
        $user = Auth::user();
        if ($user->user_type === 'admin' || $user->user_type == 'super_admin') {
            $category = Category::get();
            $subCategory = SubCategory::get();
            return view('admin.Product.addProductForm', compact('category', 'subCategory'));
        }
        return redirect()->route('home');
    }

    public function addProduct(Request $request)
    {
        $user = Auth::user();
        if ($user->user_type === 'admin' || $user->user_type == 'super_admin') {
            $validated = $request->validate([
                'product_name' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255|unique:product,slug',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
                'meta_keywords' => 'nullable|string|max:255',
                'category_id' => 'required|exists:category,id',
                'sub_category_id' => 'nullable|exists:sub_category,id',
                'price' => 'required|numeric',
                'discount_price' => 'nullable|string|max:5',
                'quantity' => 'required|integer',
                'is_active' => 'required|numeric',
                'image.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
                'description' => 'nullable|string',
            ]);

            $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['name']));
            $validated['parent_id'] = $user->id;
            $validated['stock'] = $validated['quantity'] > 0 ? 'In Stock' : 'Out of Stock';

            if ($validated['sub_category_id'] == null) {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Subcategory is required.',
                ]);
            }
            if ($validated['featured_image']) {
                $image = $request->file('featured_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/products'), $filename);
                $validated['featured_image'] = 'uploads/products/' . $filename;
            }

            if ($validated['discount_price'] > 0 && $validated['discount_price'] < 100) {
                $validated['discount_price'] = ($validated['price'] * $validated['discount_price']) / 100;
                $validated['is_discount'] = 1;
            } else if ($validated['discount_price'] == 0 || $validated['discount_price'] == null) {
                $validated['is_discount'] = 0;
                $validated['discount_price'] = 0 . '%';
            } else {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Discount price should be between 0 and 100.',
                ]);
            }

            $imagePaths = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $imageSize = $image->getSize();
                    $image->move(public_path('uploads/products'), $filename);
                    $imagePaths[] = [
                        'image_path' => 'uploads/products/' . $filename,
                        'image_size' => round($imageSize / 1024) . ' KB',
                    ];
                }
            }

            if (empty($imagePaths)) {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Please upload at least one image.',
                ]);
            }

            $product = Product::create($validated);

            foreach ($imagePaths as $path) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path['image_path'],
                    'image_size' => $path['image_size'],
                    'category_id' => $validated['category_id'],
                    'sub_category_id' => $validated['sub_category_id'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            if ($product) {
                return response()->json([
                    'status' => 'Success',
                    'message' => 'Product created successfully.',
                ]);
            } else {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Failed to create Product.',
                ]);
            }
        } else {
            return redirect()->route('home');
        }
    }

    public function editProduct(Request $request, $slug)
    {
        $user = Auth::user();
        $id = Product::where('slug', $slug)->value('id');
        if (in_array($user->user_type, ['admin', 'super_admin'])) {
            $product = Product::with('category', 'subCategory', 'productImages');
            if ($user->user_type !== 'super_admin') {
                $product->where('parent_id', $user->id);
            }
            $product->where('slug', $slug);
            $product = $product->first();

            if ($product) {
                $category = Category::get();
                $subCategory = SubCategory::where('category_id', $product->category_id)->get();
                $productImages = ProductImage::where('product_id', $id)->get();

                return view('admin.Product.editProductForm', compact('product', 'category', 'subCategory', 'productImages'));
            } else {
                return redirect()->route('product-list')->with('error', 'Product not found.');
            }
        }
    }

    public function updateProduct(Request $request, $id)
    {
        $user = Auth::user();
        if ($user->user_type === 'admin' || $user->user_type == 'super_admin') {
            $validated = $request->validate([
                'product_name' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
                'meta_keywords' => 'nullable|string|max:255',
                'category_id' => 'required|exists:category,id',
                'sub_category_id' => 'nullable|exists:sub_category,id',
                'price' => 'required|numeric',
                'discount_price' => 'nullable|string|max:5',
                'quantity' => 'required|integer',
                'is_active' => 'required|numeric',
                'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
                'description' => 'nullable|string',
            ]);
            
            $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['name']));
            $validated['stock'] = $validated['quantity'] > 0 ? 'In Stock' : 'Out of Stock';
            
            if ($validated['sub_category_id'] == null) {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Subcategory is required.',
                ]);
            }
            if ($request->hasFile('featured_image')) {
                $image = $request->file('featured_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/products'), $filename);
                $validated['featured_image'] = '/uploads/products/' . $filename;
            }
            
            if ($validated['discount_price'] > 0 && $validated['discount_price'] < 100) {
                $validated['discount_price'] = ($validated['price'] * $validated['discount_price']) / 100;
                $validated['is_discount'] = 1;
            } else if ($validated['discount_price'] == 0 || $validated['discount_price'] == null) {
                $validated['is_discount'] = 0;
                $validated['discount_price'] = 0 . '%';
            } else {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Discount price should be between 0 and 100.',
                ]);
            }
            
            $product = Product::find($id);
            $imagePaths = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $imageSize = $image->getSize();
                    $image->move(public_path('uploads/products'), $filename);

                    $imagePaths[] = [
                        'image_path' => 'uploads/products/' . $filename,
                        'image_size' => round($imageSize / 1024) . ' KB',
                    ];
                }
                foreach ($imagePaths as $path) {
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $path['image_path'],
                        'image_size' => $path['image_size'],
                        'category_id' => $validated['category_id'],
                        'sub_category_id' => $validated['sub_category_id'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }

            $product->fill($validated);

            if (!$product->isDirty()) {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'No changes made to the product.',
                ]);
            }

           if($product->parent_id === $request->user()->id){
                $product->parent_id = $request->user()->id;
            }else{
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Unauthorized access.',
                ]);
            }

            $product->save();




            if ($product) {
                return response()->json([
                    'status' => 'Success',
                    'message' => 'Product updated successfully.',
                ]);
            } else {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Failed to update Product.',
                ]);
            }
        } else {
            return redirect()->route('home');
        }
    }



    public function productList(Request $request)
    {
        $user = Auth::user();
        $perPage = 10;
        if ($request->has('dataCount')) {
            $perPage = $request->input('dataCount');
        }


        if ($user->user_type === 'admin') {

            $products = Product::where('parent_id', $user->id)
                ->with('category', 'subCategory', 'productImages')
                ->orderBy('created_at', 'desc')
                ->paginate($perPage);

            $totalProducts = Product::where('parent_id', $user->id)->count();
        } elseif ($user->user_type === 'super_admin') {
            $products = Product::with('category', 'subCategory', 'productImages', 'getUser')
                ->orderBy('product.created_at', 'desc')
                ->paginate($perPage);

            $totalProducts = Product::count();
        } else {
            return redirect()->route('home');
        }

        if ($request->ajax()) {
            return view('admin.partials.productRows', ['products' => $products])->render();
        }

        return view('admin.Product.productList', compact('products', 'totalProducts'));
    }


    public function toggleProductStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:product,id',
            'password' => 'required|string',
        ]);

        $user = Auth::user();
        if (!in_array($user->user_type, ['admin', 'super_admin'])) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Unauthorized access.',
            ], 403);
        }
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Invalid password.',
            ], 401);
        }

        $product = Product::find($request->id);
        $product->is_active = !$product->is_active;
        $product->save();

        return response()->json([
            'status' => 'Success',
            'message' => 'Product status updated successfully.',
        ]);
    }
}
