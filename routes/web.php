<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
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
Route::get('/', function () {
    return view('welcome');
});

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


//Controller
// Route::get("users", "Users@index");
Route::get('users', [Users::class, 'index']);
