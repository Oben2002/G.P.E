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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('personnel',['as' => 'personnel.get', 'uses'=> 'App\Http\Controllers\PersonnelController@getPersonnel']);
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::resource('personnels', 'App\Http\Controllers\PersonnelController', ['except' => ['show']]);


    Route::get('personnel',['as' => 'personnel.index', 'uses'=> 'App\Http\Controllers\PersonnelController@index']);
    Route::post('personnel',['as' => 'personnel.create', 'uses'=> 'App\Http\Controllers\PersonnelController@createPersonnel']);

    Route::get('FingerDevices' , [ 'as'=> 'finger.create', 'uses'=>'App\Http\Controllers\BiometricDeviceController@create']);
    Route::post('FingerDevices/create' , [ 'as'=> 'finger.store', 'uses'=>'App\Http\Controllers\BiometricDeviceController@store']);

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::get('personnel',['as' => 'personnel.add', 'uses'=> 'App\Http\Controllers\PersonnelController@addPersonnel']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

