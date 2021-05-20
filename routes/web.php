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
    return view('index');
});

Route::get('/Pages.Auth.Login.Admin.User.php', function () {
    return view('Pages.Auth.Login.Admin.User');
});

Route::get('/Pages.Auth.ForgotPassword.php', function () {
    return view('Pages.Auth.ForgotPassword');
});

Route::get('/Pages.Auth.Login.Admin.php', function () {
    return view('Pages.Auth.Login.Admin');
});

Route::get('/Pages.Auth.Login.Userr.php', function () {
    return view('Pages.Auth.Login.User');
});

Route::get('/Dashboard.Admin.php', function () {
    return view('Dashboard.Admin');
});

Route::get('/Dashboard.User.php', function () {
    return view('Dashboard.User');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
