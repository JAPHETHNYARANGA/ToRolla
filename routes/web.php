<?php

use App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('register', function(){
//     return view('register');
// });

Route::get('forgotPassword', function(){
    return view('forgotPassword');
});



Route::get('login', [Authentication::class, 'index']);

Route::post('custom-login', [Authentication::class, 'customLogin'])->name('login.custom');

Route::get('register', [Authentication::class, 'registration'])->name('register-user');

Route::post('custom-registration', [Authentication::class, 'customRegistration'])->name('register.custom');

Route::get('signout', [Authentication::class, 'signOut'])->name('signout');