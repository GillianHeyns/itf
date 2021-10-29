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

Auth::routes();
Route::redirect('home', '/');
Route::get('logout', 'Auth\LoginController@logout');
Route::view('/', 'home');

Route::get('contact', function () {
    return 'Contact info';
});

Route::get('admin/records', function (){
    return view('admin.records.index');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    route::redirect('/', 'records');
    Route::get('records', 'Admin\RecordController@index');
});

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::redirect('/', '/user/profile');
    Route::get('profile', 'User\ProfileController@edit');
    Route::post('profile', 'User\ProfileController@update');
    Route::get('password', 'User\PasswordController@edit');
    Route::post('password', 'User\PasswordController@update');
});
