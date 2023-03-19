<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\flyts;

class registerFlyts extends Controller
{
    function generateHandle($username) {
        $username = preg_replace("/[^a-zA-Z0-9]/", "", $username);
        $handle = "@" . $username;
        return $handle;
    }

    public function registerFlyts(Request $request) {
        $username = Session::get('user.username');
        $userLogo = Session::get('user.userLogo');

        if ($username == null) {
            return redirect('/login');
        }

        $flyts = new flyts();
        $flyts->username = $username;
        $flyts->userLogo = $userLogo;
        $flyts->userHandle = $this->generateHandle($flyts->username);
        $flyts->flytsText = $request->input('flytsText');
        $flyts->save();
        $flyts = flyts::orderByDesc('created_at')->get();
        return view('home', ['flyts' => $flyts]);
    }
}
