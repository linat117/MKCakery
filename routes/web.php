<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
    return view('index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/cakePre', [App\Http\Controllers\CakepreController::class, 'index'])->name('cakepre');
Route::get('/cookies', [App\Http\Controllers\CookiesController::class, 'index'])->name('cookies');
Route::get('/cakes', [App\Http\Controllers\CakesController::class, 'index'])->name('cakes');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/mklogin', [App\Http\Controllers\MkloginController::class, 'index'])->name('mklogin');

Route::get('/cupcakess', [App\Http\Controllers\CupcakessController::class, 'index'])->name('cupcakess');
Route::get('/cookieshop', [App\Http\Controllers\CookieshopController::class, 'index'])->name('cookieshop');
Route::get('/login', [App\Http\Controllers\MkloginController::class, 'index'])->name('mklogin');

Route::post('/login', [App\Http\Controllers\MkloginController::class, 'index'])->name('mklogin');


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');