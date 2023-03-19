<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class handleLogout extends Controller {
    public function handleLogout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}
