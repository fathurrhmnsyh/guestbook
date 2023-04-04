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
    return view('login');
});

//guest

Route::get('/' , 'AuthController@login')->name('login');
Route::get('/login' , 'AuthController@login')->name('login');
Route::post('/postlogin' , 'AuthController@postlogin');
Route::get('/logout' , 'AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
    route::get('/tamu1' , 'DashboardController@tamu');
    route::post('/tamu1/masuk' , 'DashboardController@masuk');
    route::get('/tamu1/edit/{id}' , 'DashboardController@edit');
    route::put('/tamu1/update/{id}' , 'DashboardController@update');
    route::post('/tamu1/foto' , 'DashboardController@foto');
});