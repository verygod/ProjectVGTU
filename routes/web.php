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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('permissions', 'PermissionController');
Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');


/* Destroy routes */

Route::get('users/{id}/destroy/', [
    'as' => 'users_destroy',
    'uses' => 'RoleController@destroy'
]);

Route::get('permissions/{id}/destroy/', [
    'as' => 'permissions_destroy',
    'uses' => 'PermissionController@destroy'
]);

Route::get('roles/{id}/destroy/', [
    'as' => 'role_destroy',
    'uses' => 'RoleController@destroy'
]);