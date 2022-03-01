<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\catalogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\frontaboutController;
use App\Http\Controllers\frontcatalogController;
use App\Http\Controllers\frontcontactController;
use App\Http\Controllers\fronthomeController;
use App\Http\Controllers\frontshopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\shopviewController;
use App\Http\Controllers\slideController;
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

Route::get('/', function () {
    return view('front.home');
});

Route::resource('/',fronthomeController::class);

Route::get('/shop', function(){
    return view('front.shop');
});
Route::resource('/shop',frontshopController::class);

Route::get('/contact',function(){
    return view('front.contact');
});
Route::resource('/contact',frontcontactController::class);

Route::get('/about',function(){
    return view('front.about');
});
Route::resource('/about',frontaboutController::class);

Route::get('/catalog', [frontcatalogController::class, 'index']);
Route::get('/catalog/{id}', [frontcatalogController::class, 'filter']);
Route::get('/shop-view/{id}',[shopviewController::class,'index']);
Auth::routes();
Route::get('dashboard',function(){
    return view('dashboard.index');
});

Route::get('Dashboard-slide', function(){
    return view('dashboard.dashboard-slide');
});
Route::resource('Dashboard-slide',slideController::class);



Route::get('Dashboard-home', function(){
    return view('dashboard.dashboard-home');

});
Route::resource('Dashboard-home',HomeController::class);
Route::get('Dashboard-shop',function(){
    return view('dashboard.dashboard-shop');
});
Route::resource('Dashboard-shop', shopController::class);

Route::get('Dashboard-about',function(){
    return view('dashboard.dashboard-about');
});
Route::resource('Dashboard-about', aboutController::class);

Route::get('Dashboard-catalog', function (){
    return view('dashboard.dashboard-catalog');
});
Route::resource('Dashboard-catalog', catalogController::class);



Route::get('Dashboard-contact',function(){
    return view('dashboard.dashboard-contact');
});
Route::resource('Dashboard-contact', contactController::class);

Route::get('Dashboard-transaksi',function(){
    return view('dashboard.transaksi.show');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
