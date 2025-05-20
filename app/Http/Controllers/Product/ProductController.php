<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAddProductForm(Request $request)
    {
        $user = $request->user();
        if ($user->user_type === 'admin' || $user->user_type == 'super_admin') {
            $category = Category::get();
            return view('admin.addProductFrom');
        }
        return redirect()->route('home');
    }
}

