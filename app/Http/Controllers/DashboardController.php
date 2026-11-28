<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getUserDetails(Request $request)
    {
        $user = $request->user();
        if ($user->user_type === 'admin' || $user->user_type == 'super_admin') {
            $user = [
                'name' => $user->name,
                'email' => $user->email,
                'username' => $user->username,
                'phone' => $user->phone,
                'address' => $user->address,
                'city' => $user->city,
                'state' => $user->state,
                'country' => $user->country,
                'zip' => $user->zip,
            ];

            foreach ($user as $key => $value) {
                if (is_null($value)) {
                    $user[$key] = 'N/A';
                }
            }
            return view('admin.dashboard', compact('user'));
        } else {
            return redirect()->route('home');
        }
    }
}
