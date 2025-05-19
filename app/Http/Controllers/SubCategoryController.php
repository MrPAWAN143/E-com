<?php

namespace App\Http\Controllers; 


use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SubCategoryController extends Controller
{
    public function addSubCategory(Request $request)
    {
        $user = $request->user();
        if ($user->user_type == 'super_admin' || $user->user_type == 'admin') {
            $categories = Category::get();
            return view('admin.subCategory.subCategoryListForm', compact('categories'));
        }
        return redirect()->route('dashboard');
    }

    public function storeSubCategory(Request $request)
    {

        $user = $request->user();
        if ($user->user_type == 'super_admin' || $user->user_type == 'admin') {
            $validated =  $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255|unique:sub_category,slug',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'meta_keywords' => 'nullable|string|max:255',
                'category_id' => 'required|exists:category,id',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
                'description' => 'nullable|string',

            ]);

            $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['name']));
            $validated['parent_id'] = $user->id;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/sub_categories'), $filename);
                $validated['image'] = 'uploads/sub_categories/' . $filename;
            }

            $subCategory = SubCategory::create($validated);

         if ($subCategory) {
                return response()->json([
                    'status' => 'Success',
                    'message' => 'SubCategory created successfully.',
                ]);
            } else {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Failed to create SubCategory.',
                ]);
            }
        }
    }
}
