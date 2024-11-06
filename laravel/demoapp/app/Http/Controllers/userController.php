<?php

/*

Type of controller and Make Controller

1) Basic Controller

Php artisan make:controller userController


2)  resources controller

Php artisan make:controller resourceController --resource

3) --invokable Controller

Php artisan make:controller singleController --invokable

*/




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    
    function signup(){
        return view('MVC');
    }

    function login(){
        return view('login');
    }

    function delete(){
        // delete code
    }
}
