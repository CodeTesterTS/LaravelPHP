<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('welcome');
    
});

Route::get('/hello', function () {
    //return view('welcome');
    //return 'Hello World';
    return '<h1>Hello World</h1>';
});*/

/*
 RETURN DATA FROM URL 
 Route::get('/users/{id}/{name}', function ($id, $name) {
    return ('This is user'.$name.'with an id of '.$id);
    
});

FUNCTION METHOD OF RETURNING VIEW *NON MVC*

Route::get('/about', function () {
    return view('pages.about');
    
});

*/
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/products', 'App\Http\Controllers\PagesController@products');
