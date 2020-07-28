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

/*
|--------------------------------------------------------------------------
| Web Routes HomepageController
|--------------------------------------------------------------------------
*/
Route::get('/', 'Homepage\HomepageController@home')->name('home.home');
Route::get('/test', 'Homepage\HomepageController@test')->name('home.test');

/*
|--------------------------------------------------------------------------
| Contact Mail
|--------------------------------------------------------------------------
*/
Route::post('/send-contact', 'Homepage\ContactController@sendContact')->name('contact.send');
Route::get('/contact-thx', 'Homepage\ContactController@thxContact')->name('contact.thx');

Route::get('/mail', function () {
    return new App\Mail\Contact();
});

Route::get('/demo', function () {
    return new App\Mail\UserWelcome();
});


/*
|--------------------------------------------------------------------------
| Datenschutz + Impressum  Homepage\LegalController.php
|--------------------------------------------------------------------------
*/
Route::get('/impressum', 'Homepage\LegalController@imprint')->name('legal.imprint');
Route::get('/datenschutz', 'Homepage\LegalController@privacy')->name('legal.privacy');

/*
|--------------------------------------------------------------------------
| Cookie Einstellungen Homepage\CoookieController.php
|--------------------------------------------------------------------------
*/
Route::post('/save-custom-cookie', 'Homepage\CookieController@saveCustomCookie')->name('cookie.saveCustom');
Route::get('/save-all-Cookie', 'Homepage\CookieController@saveAllCookie')->name('cookie.saveAll');
Route::get('/cookie-settings', 'Homepage\CookieController@cookieSettings')->name('cookie.settings');
Route::get('/cookie-delet', 'Homepage\CookieController@cookieDelet')->name('cookie.delet');


