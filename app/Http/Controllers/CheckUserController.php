<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class CheckUserController extends Controller
{
    public function checkUsername(Request $request)
    {
        $username = $request->input('username');
        $username = User::where('username', $username)->first();
        if ($username) {
            return response()->json(['exists' => true]);
        }
        return response()->json(['exists' => false]);
    }
}
