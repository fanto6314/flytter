<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\flyts;

class LoginController extends Controller
{
    public function loginUser(Request $request) {
        $user = users::where('username', $request->username)->first();
        if ($user) {
            if ($user->password == $request->password) {
                session(['user' => $user]);
                $flyts = flyts::orderByDesc('created_at')->get();
                return view('home', ['flyts' => $flyts]);
            } else {
                return view('login');
            }
        } else {
            return view('login');
        }
    }
}
