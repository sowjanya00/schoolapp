<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\Auth\AuthSmsController;
use App\Http\Controllers\Auth\CustomAuthController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/index", function () {
    return view('index');
});


Route::resource("/student", StudentController::class);
Route::resource("/department", DepartmentController::class);
Route::get('/generate-qrcode', [QrCodeController::class, 'index']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::controller(App\Http\Controllers\Auth\AuthOtpController::class)->group(function(){
    Route::get('otp/login', 'login')->name('otp.login');
    Route::post('otp/generate', 'generate')->name('otp.generate');
    Route::get('otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('otp/login', 'loginWithOtp')->name('otp.getlogin');
});



Route::controller(App\Http\Controllers\Auth\CustomAuthController::class)->group(function(){

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login1', [CustomAuthController::class, 'index'])->name('login1');
Route::post('custom-login1', [CustomAuthController::class, 'customLogin1'])->name('login1.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
});