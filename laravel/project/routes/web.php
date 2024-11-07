<?php

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
    return view('website.index');
});

Route::get('/index', function () {
    return view('website.index');
});

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

Route::get('/manage_categories', function () {
    return view('admin.manage_categories');
});


Route::get('/add_services', function () {
    return view('admin.add_services');
});

Route::get('/manage_services', function () {
    return view('admin.manage_services');
});

Route::get('/manage_user', function () {
    return view('admin.manage_user');
});

Route::get('/manage_contact', function () {
    return view('admin.manage_contact');
});