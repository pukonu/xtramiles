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

Route::get('/', 'AppController@index');

Route::get('/home', 'AppController@index');

Route::get('/about', 'AppController@about');

Route::get('/about/our-values', 'AppController@our_values');

Route::get('/about/areas-we-cover', 'AppController@areas_we_cover');

Route::get('/services', 'AppController@services');

Route::get('/services/generix-clean', 'AppController@generix_clean');

Route::get('/services/generix-care', 'AppController@generix_care');

Route::get('/services/generix-care-plus', 'AppController@generix_care_plus');

Route::get('/services/cleaning-schedule', 'AppController@services_cleaning');

Route::get('/quality-assurance', 'AppController@quality_assurance');

Route::get('/quality-assurance/regulations-and-recruitment', 'AppController@regulations_recruitment');

Route::get('/quality-assurance/monitoring-and-feedback', 'AppController@monitoring');

Route::get('/quality-assurance/workforce-development', 'AppController@workforce_development');

Route::get('/quality-assurance/partnership', 'AppController@partnership');

Route::get('/contact', 'AppController@contact');