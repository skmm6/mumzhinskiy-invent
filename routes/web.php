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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get(
    '/contact/all/{id}', 
    'TechController@showOneMassage')
    ->name('contact-date-one');


Route::get(
    '/contact/all/{id}/update', 
    'TechController@updateMessage')
    ->name('contact-update');

Route::post(
    '/contact/all/{id}/update', 
    'TechController@updateMessageSubmit'
)->name('contact-update-submit');

Route::get(
    '/contact/all/{id}/delete', 
    'TechController@deleteMessage'
)->name('contact-delete');


Route::get('/contact/all', 'TechController@allData')->name('contact-data');
Route::post('/contact/submit', 'TechController@submit')->name('contact-form');
