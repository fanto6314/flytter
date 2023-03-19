<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\testSession;
use App\Http\Controllers\registerFlyts;
use App\Http\Controllers\handleLogout;
use App\Http\Controllers\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [homeController::class, 'home']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/tests', function () {
    return view('testsession');
});


Route::post('/registerUserRoute', [RegisterController::class, 'registerUser'])->name('registerUser');

Route::post('/loginUserRoute', [LoginController::class, 'loginUser'])->name('loginUser');

Route::post('/registerFlytsRoute', [registerFlyts::class, 'registerFlyts'])->name('registerFlyts');

Route::post('/handleLogoutRoute', [handleLogout::class, 'handleLogout'])->name('handleLogout');

Route::post('/testSessionRoute', [testSession::class, 'testSession'])->name('testSession');