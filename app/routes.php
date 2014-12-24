<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::controller('about', 'AboutController');

Route::controller('news', 'NewsController');

Route::controller('chapters', 'ChaptersController');

Route::controller('gallery', 'GalleryController');

Route::controller('contact', 'ContactController');

Route::controller('/', 'HomeController');


