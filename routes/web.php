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

//PAGINA's ITF WEBSITE
//contact formulier
Route::get('contact', [ContactController::class, 'show']);
Route::post('contact', [ContactController::class, 'sendEmail']);
//Route::view('contact', 'contact');

Route::view('admin/records', 'admin.records.index');
Route::view('admin/content-management','admin/content-management');
Route::view('admin/project','admin/project');
Route::view('faciliteiten', 'faciliteiten');
Route::view('projecten', 'projecten');
Route::view('dagopleiding', 'dagopleiding');
Route::view('wes', 'wes');
Route::view('acs', 'acs');

//Routes naar verschillende keuzerichtingen binnen de bachelor opleiding
Route::view('dagopleiding/app', 'opleidingen.bachelor.keuzerichting.app');
Route::view('dagopleiding/ai', 'opleidingen.bachelor.keuzerichting.ai');
Route::view('dagopleiding/ccs', 'opleidingen.bachelor.keuzerichting.ccs');
Route::view('dagopleiding/di', 'opleidingen.bachelor.keuzerichting.di');
Route::view('dagopleiding/iot', 'opleidingen.bachelor.keuzerichting.iot');

Route::view('wes/app', 'opleidingen.werkenEnStuderen.keuzerichting.app');
Route::view('wes/ccs', 'opleidingen.werkenEnStuderen.keuzerichting.ccs');
Route::view('facilities', 'faciliteiten_acs');
