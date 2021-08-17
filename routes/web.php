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



Auth::routes();

	Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
		Route::get('/dashboard', 'DashboardController@index')->middleware('admin_auth');


		Route::put('/languages/update_values/{UpdateValues}', 'LanguagesController@update_values')->middleware('admin_auth');
		Route::resource('/languages', 'LanguagesController')->middleware('admin_auth');
		
		Route::resource('/change-password', 'ChangePasswordController')->middleware('admin_auth');
		Route::resource('/pages', 'PagesController')->middleware('admin_auth');
		Route::resource('/mail-settings', 'MailSettingsController')->middleware('admin_auth');
		Route::resource('/social-sharing', 'SocialSharingController')->middleware('admin_auth');
		Route::resource('/ads-settings', 'AdsSettingsController')->middleware('admin_auth');
		Route::resource('/analytics-settings', 'AnalyticsSettingsController')->middleware('admin_auth');
		Route::resource('/captcha-settings', 'CaptchaSettingsController')->middleware('admin_auth');
		Route::resource('/general-settings', 'GeneralSettingsController')->middleware('admin_auth');
		
		// Route::post('/source/change-source-status', 'SourceController@change_source_status')->middleware('admin_auth');
		Route::resource('/sources', 'SourceController')->middleware('admin_auth');

		// Signup
		Route::get('/create', 'HomeController@register_form');
		Route::post('/signup/', 'HomeController@signup');
		// Signup End
		// Login logout
		Route::get('/logout', 'HomeController@logout');
		Route::post('/login', 'HomeController@login');
		Route::get('', 'HomeController@loginform');
		// Login End		
	});

// Frontend  
Route::get('/downloaderr', 'ApiController@downloade');
Route::get('/', 'HomeController@index');
Route::get('/send/email', 'HomeController@mail');
Route::get('/about', 'HomeController@about');
Route::get('/privacy', 'HomeController@privacy_policy');
Route::get('/advertise', 'HomeController@advertise');
Route::get('/vd', 'ApiController@downloade');
Route::post('/dvertisingform', 'HomeController@advertiseform');
Route::get('/video/api', 'Video\ApiController@index');
Route::get('/downloader', 'Video\ApiController@downloader');
Route::get('/soundcloud', 'Video\ApiController@downloade_souncloud');
Route::get('/page/{page}', 'PagesController@index');

Route::post('/search', 'ApiController@get_video_data_ajax');
Route::post('/contactform', 'HomeController@contactform');
Route::get('/contact', 'HomeController@contact');
Route::get('/{id}', 'HomeController@index_lang');
Route::get('/contact/{id}', 'HomeController@contact_lang');

// mail

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return redirect('/admin/dashboard');
});
