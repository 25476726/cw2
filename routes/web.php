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

    Route::get('/home', 'HomeController@index')->name('home'); /* Home page*/
    Route::resource('/admin', 'AdminController' ); /* Admin Pages (Unused in this site) */
    Route::resource('/users', 'UserController' ); /* User Pages */
    Route::resource('/questionnaire', 'QuestionnaireController' ); /* Questionnaire pages (Create, Edit, Show, Index) */
    Route::resource('/question', 'QuestionController' ); /* Question pages (Create, Edit, Show, Index) */
    Route::resource('/option', 'OptionController' ); /* Option pages (Create, Edit, Index) */