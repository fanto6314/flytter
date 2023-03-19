<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class RegisterController extends Controller
{ 
    public function registerUser(Request $request) {
        $user = new users;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return view('login');
    }
}
