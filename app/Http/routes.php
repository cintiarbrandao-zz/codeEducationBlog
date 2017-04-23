<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('blog.index');
});

Route::get('post', function () {
    return view('blog.post');
});

Route::get('quem-sou', function () {
    return view('blog.quem-sou');
});
Route::get('contato', function () {
    return view('blog.contato');
});*/

Route::get('/','BlogController@index');
Route::get('post','BlogController@post');
Route::get('quem-sou','BlogController@quemSou');
Route::get('contato','BlogController@contato');