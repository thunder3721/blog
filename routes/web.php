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
/*
Route::get('/', function () {
//    return view('welcome2');
});
Route::get('/', function() 
{
return 'Welcome to our home page!';
});
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/about2', 'PagesController@about2');
Route::get('/contact', 'PagesController@contact');