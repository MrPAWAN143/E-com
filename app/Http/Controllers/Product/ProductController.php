<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function showAddProductForm(Request $request)
    {
        $user = Auth::user();
        if ($user->user_type === 'admin' || $user->user_type == 'super_admin') {
            $category = Category::get();
            $subCategory = SubCategory::get();
            return view('admin.Product.addProductForm' , compact('category', 'subCategory'));
        }
        return redirect()->route('home');
    }

    public function addProduct(Request $request)
    {
        dd($request->all());
        $user = Auth::user();

        if ($user->user_type === 'admin' || $user->user_type == 'super_admin') {

      
        }
    }
}

