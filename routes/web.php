<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    if (!isset($_COOKIE['cat'])) {
        Cookie::queue('cat', json_encode([]), 30);
    }
    $getData = json_decode(Cookie::get("cat"));
    return view('register', compact("getData"));
})->name("register");

Route::post('/user/register', [RegistrationController::class, 'postRegister']);
