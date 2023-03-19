<?php

namespace App\Http\Controllers;

use App\Models\flyts;

class homeController extends Controller {
    public function home() {
        $flyts = flyts::orderByDesc('created_at')->get();
        return view('home', ['flyts' => $flyts]);
    }
}