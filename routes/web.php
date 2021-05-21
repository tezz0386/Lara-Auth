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
Route::get('/admin', 'AdminHomeController@index')->name('admin-home');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin-get-login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin-login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin-logout');
Route::post('/admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin-password.email');
Route::get('/admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin-password.request');
Route::post('admin/password/reset', 'Auth\AdminResetPasswordController@reset')->name('');
Route::get('/admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin-password.reset');   
