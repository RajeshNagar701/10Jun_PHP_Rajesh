<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\serviceController;

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
    return view('website.index');
});

Route::get('/index', function () {
    return view('website.index');
});

Route::get('/signup',[userController::class,'create']);


Route::get('/login',[userController::class,'login']);


Route::get('/about', function () {
    return view('website.about');
});
Route::get('/appointment', function () {
    return view('website.appointment');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/feature', function () {
    return view('website.feature');
});

Route::get('/service', function () {
    return view('website.service');
});

Route::get('/team', function () {
    return view('website.team');
});

Route::get('/testimonial', function () {
    return view('website.testimonial');
});


// Admin =============================================================

Route::get('/admin-login', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/add_categories', function () {
    return view('admin.add_categories');
});

Route::get('/manage_categories',[categoryController::class,'show']);
Route::get('/deletecategories/{id}',[categoryController::class,'destroy']);

Route::get('/add_services',[serviceController::class,'create']);
Route::get('/manage_services',[serviceController::class,'show']);
Route::get('/deleteservices/{id}',[serviceController::class,'destroy']);

Route::get('/manage_user',[userController::class,'show']);
Route::get('/deleteuser/{id}',[userController::class,'destroy']);

Route::get('/manage_contact',[contactController::class,'show']);
Route::get('/deletecontact/{id}',[contactController::class,'destroy']);