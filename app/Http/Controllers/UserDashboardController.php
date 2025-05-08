<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function showUserDashboard(Request $request)
    {
        $user = $request->user();
        return view('userDashboard.userdashboard', ['user' => $user]);
       
    }
}
