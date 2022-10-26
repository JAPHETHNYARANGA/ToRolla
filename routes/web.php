<!-- <?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Password;
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





Route::get('login', [Authentication::class, 'index']);

Route::post('custom-login', [Authentication::class, 'customLogin'])->name('login.custom');

Route::get('register', [Authentication::class, 'registration'])->name('register-user');

Route::post('custom-registration', [Authentication::class, 'customRegistration'])->name('register.custom');

Route::get('forgotPassword', function(){ return view('forgotPassword');});

Route::get('logout', [Authentication::class, 'logout']);

Route::get('home', [HomeController::class,'homePageView']);


Route::get('addProduct', [HomeController::class,'addProductFunction']);


Route::get('nationalities',function(){
    $jsonData = file_get_contents("database/categories.json");
    $json = json_decode($jsonData, true);
    $data['nationalities'] = $json['nationalities'];
});


Route::get('forgotPassword', [Authentication::class, 'showForgetPasswordForm']);
// Route::post('forget-password', [Authentication::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
// Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post'); -->