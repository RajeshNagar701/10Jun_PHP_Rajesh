

<!--
Migration : create table with s       exa:  users

php artisan make:migration create_users_table
php artisan migrate

-->

<!--

Model : table s wala & model wthout s

php artisan make:model user

-->


<!--

Control : make controller by table

php artisan make:controller userControler

-->


<!--

View Page by Route  : resource/views/mypage.blade.php  

Route::get('/signup', function () {
    return view('signup');
});


View Page by controller   

Route::get('/mvc',[userController::class, 'signup']); 

-->


<!--

All in one command

// model & controller
1) php artisan make:controller userController --resource --model=User    

// migration & model & controller

php artisan make:model demo -c --resource --migration

-->




<h1>Hello MVC</h1>
