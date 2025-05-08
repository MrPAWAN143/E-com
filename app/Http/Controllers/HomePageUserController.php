<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageUserController extends Controller
{
    public function getUserDetails(Request $request)
    {
        // dd($request->user());

        $user = $request->user();
        // $user = [
        //     'name' => $user->name,
        //     'email' => $user->email,
        //     'username' => $user->username,
        //     'phone' => $user->phone,
        //     'address' => $user->address,
        //     'city' => $user->city,
        //     'state' => $user->state,
        //     'country' => $user->country,
        //     'zip' => $user->zip,
        // ];

        return view('home', compact('user'));
    }
}
