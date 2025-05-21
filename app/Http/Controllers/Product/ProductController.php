<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use BladeUIKit\Components\DateTime\Carbon;
use Illuminate\Support\Facades\Auth;

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
                'name' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255|unique:product,slug',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'meta_keywords' => 'nullable|string|max:255',
                'category_id' => 'required|exists:category,id',
                'sub_category_id' => 'nullable|exists:sub_category,id',
                'price' => 'required|numeric',
                'discount_price' => 'nullable|string|max:5',
                'quantity' => 'required|integer',
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

            if ($validated['discount_price'] > 0 && $validated['discount_price'] < 100) {
                $validated['discount_price'] = ($validated['price'] * $validated['discount_price'])/100;
                $validated['is_discount'] = 1;
            } else if ($validated['discount_price'] == 0 || $validated['discount_price'] == null) {
                $validated['is_discount'] = 0;
                $validated['discount_price'] = 0 .'%';
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
}
