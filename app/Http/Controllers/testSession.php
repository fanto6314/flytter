<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class testSession extends Controller
{
    public function testSession(Request $request) {
        Log::info($request->session()->all());
        return view('testsession');
    }
}
