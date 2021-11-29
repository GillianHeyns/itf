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

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::redirect('/', '/admin/cms');

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
Route::view('acs', 'acs');

//Routes naar verschillende keuzerichtingen binnen de bachelor opleiding
Route::view('dagopleiding/app', 'opleidingen.bachelor.keuzerichting.app');
Route::view('dagopleiding/ai', 'opleidingen.bachelor.keuzerichting.ai');
Route::view('dagopleiding/ccs', 'opleidingen.bachelor.keuzerichting.ccs');
Route::get('dagopleiding/di', 'Testimony_DI_ViewController@showTestimonies');
//Route::view('dagopleiding/di', 'opleidingen.bachelor.keuzerichting.di');
Route::view('dagopleiding/iot', 'opleidingen.bachelor.keuzerichting.iot');

Route::view('wes/app', 'opleidingen.werkenEnStuderen.keuzerichting.app');
Route::view('wes/ccs', 'opleidingen.werkenEnStuderen.keuzerichting.ccs');
Route::view('facilities', 'faciliteiten_acs');
