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



Route::get('/',function (){
    return view('welcome');
});



Route::get('/signupView',['uses'=>'userController@index']);



Route::post('/signup',['uses'=>'userController@store', 'as'=>'signup']);



Route::get('/loginView',['uses'=>'userController@loginView']);



Route::post('/doLogin',['uses'=>'userController@doLogin', 'as'=>'signin']);

Route::get('/home', ['uses'=>'userController@getHome'])->middleware('auth');


Route::get('/signout', ['uses'=>'userController@logout' ,'as'=>'signout']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController')->middleware('auth');
//Route::resource('posts/store','PostsController@store');