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

Route::resource('contacts', 'ContactController');

Route::view('about','about');
Route::view('depart','department');
Route::view('courses','courses');
Route::view('blog','blog');
Route::view('contact','contact');
Route::view('teachers','teachers');
Route::view('blog-single','blog-single');