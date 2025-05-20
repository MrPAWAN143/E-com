<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $user = $request->user();
        if ($user->user_type == 'super_admin') {
            return view('admin.Category.addCategoryForm');
        }
        return redirect()->route('dashboard');
    }

    public function storeCategory(Request $request)
    {
        $user = $request->user();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:categories,slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'description' => 'nullable|string',
        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['name']));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $filename);
            $validated['image'] = 'uploads/categories/' . $filename;
        }

        $category = Category::create([
            'name' => $validated['name'],
            'slug' => $validated['slug'],
            'meta_title' => $validated['meta_title'],
            'meta_description' => $validated['meta_description'],
            'meta_keywords' => $validated['meta_keywords'],
            'image' => $validated['image'] ?? null,
            'description' => $validated['description']
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'Category created successfully.',
        ]);
    }



    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->user_type !== 'super_admin') {
            return redirect()->route('dashboard');
        }

        $perPage = 10;
        $page = $request->get('page', 1);
        $categories = Category::orderBy('id', 'desc')->skip(($page - 1) * $perPage)->take($perPage)->get();
        $totalCategories = Category::count();

        if ($request->ajax()) {
            return view('admin.partials.categoryRows', compact('categories'))->render();
        }

        return view('admin.Category.categoryListTable', compact('categories', 'totalCategories'));
    }


    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('admin.Category.editCategoryForm', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $category->fill($request->except('image'));

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/categories'), $filename);
            $category->image = 'uploads/categories/'. $filename;
        }

        $category->save();

        return response()->json(['status' => 'Success', 'message' => 'Category updated successfully']);
    }
}
