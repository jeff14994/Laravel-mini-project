<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
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

//If get url /, return welcome page from view
// Route::get('/', function () {
//     return view('welcome');
// });

//Pass with parameters
// Route::get('/{name}', function ($name) {
//     echo $name;
//     return view('welcome', ['name' => $name]); 
// });

//Anchor tag
// Route::get('/', function(){
//     return view('anchor');
// });

//Redirect / url to about-url
// Route::get('/', function(){
//     return redirect('about-url');
// });

// Route::get('/about-url', function(){
//     return view('about');
// });

//Route::get('/contact-url', function(){
//     return view('contact');
// });

//更快的寫法
// Route::view('contact-url', ' contact');

//====================================================================================
//Controller
// Route::get("users", "Users@index");
// Route::get('users/{user}', [Users::class, 'index']);

//====================================================================================
//Return users page
// Route::get('/', function () {
//     return view('users');
// });

//Alternative-1
// Route::get("/user", function(){
//     return view("users");
// });

//Alternative-2
// Route::view("user", "users");

//Pass with parameter
// Route::get("/user/{name}", function($name){
//     return view("users", ['name' => $name]); 
// });
//====================================================================================
//Use Controller to return users page

// Route::get("user/{name}",[UsersController::class, 'loadView']);
//====================================================================================
Route::get('/', function(){
    return view('welcome');
});

Route::view('users', 'users');
Route::view('about', 'about');