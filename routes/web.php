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
Route::get('/', 'HomeController@index');

Route::get('contact', function () {
    return 'Contact info';
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::redirect('/', '/admin/cms');
    //TESTING
//    Route::get('test', 'HomeController@testing');

    //CONTROLLERS
    //Project
    Route::get('cms', 'ProjectController@index');
    Route::get('nieuw-project', 'ProjectController@showlisttags');
    Route::post('cms', 'ProjectController@save');
    Route::get('cms/delete/{id}', 'ProjectController@showdelete');
    Route::get('cms/delete/{id}/confirm', 'ProjectController@delete');
    Route::get('cms/{id}', 'ProjectController@edit');
    Route::post('cms/{id}/confirm', 'ProjectController@update');

    //Getuigenis
    Route::get('cms-testimonies', 'TestimonyController@index');
    Route::get('nieuw-getuigenis', 'TestimonyController@showlisttags');
    Route::post('cms-testimonies', 'TestimonyController@save');
    Route::get('cms-testimonies/delete/{id}', 'TestimonyController@showdelete');
    Route::get('cms-testimonies/delete/{id}/confirm', 'TestimonyController@delete');
    Route::get('cms-testimonies/{id}', 'TestimonyController@edit');
    Route::post('cms-testimonies/{id}/confirm', 'TestimonyController@update');

    //Tag
    Route::get('cms-tags', 'TagController@index');
    Route::view('nieuw-tag', 'admin.nieuw-tag');
    Route::post('cms-tags', 'TagController@save');
    Route::get('cms-tags/delete/{id}', 'TagController@showdelete');
    Route::get('cms-tags/delete/{id}/confirm', 'TagController@delete');
    Route::get('cms-tags/{id}', 'TagController@edit');
    Route::post('cms-tags/{id}/confirm', 'TagController@update');
});

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::redirect('/', '/user/profile');
    Route::get('profile', 'User\ProfileController@edit');
    Route::post('profile', 'User\ProfileController@update');
    Route::get('password', 'User\PasswordController@edit');
    Route::post('password', 'User\PasswordController@update');
});
Route::middleware(['auth'])->group(function () {
    Route::view('main', 'user.landing-page');
});

//PAGINA's ITF WEBSITE
//contact formulier
Route::get('contact', 'ContactController@show');
Route::post('contact', 'ContactController@sendEmail');

Route::view('faciliteiten', 'faciliteiten');
Route::get('projecten', 'ProjectViewController@showProjecten');
Route::view('dagopleiding', 'dagopleiding');
Route::view('wes', 'wes');
Route::get('acs', 'HomeController@index_en');

//Routes naar verschillende keuzerichtingen binnen de bachelor opleiding
Route::get('dagopleiding/app', 'KeuzerichtingAPPController@show');
Route::get('dagopleiding/ai', 'KeuzerichtingAIController@show');
Route::get('dagopleiding/ccs', 'KeuzerichtingCCSController@show');
Route::get('dagopleiding/di', 'KeuzerichtingDIController@show');
Route::get('dagopleiding/iot', 'KeuzerichtingIOTController@show');

Route::view('wes/app', 'opleidingen.werkenEnStuderen.keuzerichting.app');
Route::view('wes/ccs', 'opleidingen.werkenEnStuderen.keuzerichting.ccs');
Route::view('facilities', 'faciliteiten_acs');
