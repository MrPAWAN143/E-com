<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomePageUserController extends Controller
{
    public function getUserDetails(Request $request)
    {
        $user = $request->user();
        $categories = Category::where('is_active', 1)->get();
        return view('home', ['user' => $user, 'categories' => $categories]);
    }
}
