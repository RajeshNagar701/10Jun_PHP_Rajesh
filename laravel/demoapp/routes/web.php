<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;

use App\Http\Controllers\basicController;
use App\Http\Controllers\invokableController;
use App\Http\Controllers\resourceController;


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

Route::get('/mypage', function () {
    return view('custome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/blade_template', function () {
    return view('blade_template');
});



/*
view by Route

Route::get('/mvc', function () {
    return view('MVC');
});

view by Controller

Route::get('/mvc',[userController::class, 'signup']);

*/
Route::get('/mvc',[userController::class, 'signup']); 



// controller type

Route::get('/basic',[basicController::class, 'hello']);  // basic controller

Route::get('/resource',[resourceController::class, 'create']);  // Resource controller

Route::get('/invokable',invokableController::class);  // basic controller