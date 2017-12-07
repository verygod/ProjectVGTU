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

// Route::get('/{usernme}', function () {
//     return view('profile.index');
// });

Route::get('uploads', function () {
    return view('functions.items.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('permissions', 'PermissionController');
Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');
Route::resource('categories', 'CategoryController');
Route::resource('items', 'ItemController');
Route::get('profile/{username}', 'ProfileController@show');


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

Route::get('categories/{id}/destroy/', [
    'as' => 'categories_destroy',
    'uses' => 'CategoryController@destroy'
]);