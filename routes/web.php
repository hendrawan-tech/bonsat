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

Route::get('/', 'FrontendController@index');
Route::get('/{category}/{slug}', 'FrontendController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/access/block', 'BlockController@index');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'access']], function () {
    Route::get('/homes/index', 'Dashboard\HomeController@index');
    Route::get('/settings/profile/', 'Dashboard\SettingController@profile');
    Route::put('/settings/profile/{id}', 'Dashboard\SettingController@updateprofile');
    Route::resource('/settings/general', 'Dashboard\GeneralController');
    Route::resource('/managements/menu', 'Dashboard\MenuController');
    Route::resource('/managements/submenu', 'Dashboard\SubmenuController');
    Route::resource('/managements/role', 'Dashboard\RolemenuController');
    Route::resource('/users/index', 'Dashboard\UserController');
    Route::resource('/posts/post', 'Dashboard\PostController');
    Route::resource('/posts/category', 'Dashboard\CategoryController');
});
