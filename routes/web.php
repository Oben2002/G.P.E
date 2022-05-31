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
    Route::resource('FingerDevices', 'App\Http\Controllers\BiometricDeviceController', ['except' => ['show']]);


    Route::get('personnel-index',['as' => 'personnel.index', 'uses'=> 'App\Http\Controllers\PersonnelController@index']);
    Route::post('personnel-create',['as' => 'personnel.create', 'uses'=> 'App\Http\Controllers\PersonnelController@createPersonnel']);
    Route::get('personnel-add',['as' => 'personnel.add', 'uses'=> 'App\Http\Controllers\PersonnelController@addPersonnel']);

    /*Route::get('/FingerDevices-index', 'App\Http\Controllers\BiometricDeviceController@index')->name('finger.index');
    Route::get('/FingerDevices', 'App\Http\Controllers\BiometricDeviceController@create')->name('finger.create');
    Route::get('/FingerDevices', 'App\Http\Controllers\BiometricDeviceController@show')->name('finger.show');
    Route::post('/FingerDevices', 'App\Http\Controllers\BiometricDeviceController@store')->name('finger.store');
    Route::post('/FingerDevices', 'App\Http\Controllers\BiometricDeviceController@addPersonnel')->name('finger.add');
    Route::post('/FingerDevices', 'App\Http\Controllers\BiometricDeviceController@update')->name('finger.update');
 */

    Route::get('FingerDevices-index' , [ 'as'=> 'finger.index', 'uses'=>'App\Http\Controllers\BiometricDeviceController@index']);
    //Route::get('FingerDevices-create' , [ 'as'=> 'finger.create', 'uses'=>'App\Http\Controllers\BiometricDeviceController@create']);
   // Route::get('FingerDevices-show' , [ 'as'=> 'finger.show', 'uses'=>'App\Http\Controllers\BiometricDeviceController@show']);
    //Route::post('FingerDevices-store' , [ 'as'=> 'finger.store', 'uses'=>'App\Http\Controllers\BiometricDeviceController@store']);
    //Route::post('FingerDevices-add' , [ 'as'=> 'finger.add', 'uses'=>'App\Http\Controllers\BiometricDeviceController@addPersonnel']);
   // Route::post('FingerDevices-update' , [ 'as'=> 'finger.update', 'uses'=>'App\Http\Controllers\BiometricDeviceController@update']);


    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::post('profile', ['as' => 'profile.change', 'uses' => 'App\Http\Controllers\ProfileController@changeProfile'] );
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

