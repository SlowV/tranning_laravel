<?php

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

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Session;

Route::resource('/admin/bakery', 'BakeryController');

Route::get('/admin', function (){
   return view('admin.bakery.dashboard');
});


//Switch language

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale');
