<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/', 'LandingController@index')->name('landing');
Route::get('/tentang', 'LandingController@tentang')->name('landing.tentang');
Route::get('/visi-misi', 'LandingController@visiMisi')->name('landing.visi_misi');
Route::get('/kotak-aspirasi', 'LandingController@kotakAspirasi')->name('landing.kotak_aspirasi');
Route::get('/warta', 'LandingController@warta')->name('landing.warta');
Route::get('/tim', 'LandingController@tim')->name('landing.tim');

Route::get('/faq', 'LandingController@faq')->name('landing.faq');
Route::get('/detail/{id}', 'LandingController@detail');

Route::get('/artisan', function () {
    Artisan::call('storage:link');
});

Route::prefix('/adminsssssssss')->group(function () {
    Auth::routes();

    Route::middleware('auth')->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::resource('/category', 'CategoryController');

        Route::post('/product/image', 'ProductController@ImageProduct')->name('product.image');
        Route::resource('/product', 'ProductController');

        Route::resource('/banner', 'BannerController');

        Route::get('/profile', 'HomeController@profile')->name('profile.index');
        Route::post('/profile/{profile}', 'HomeController@updateProfile')->name('profile.update');

        Route::get('/settings', 'SettingsController@index')->name('settings.index');
        Route::post('/settings', 'SettingsController@update')->name('settings.update');

        Route::get('/users', 'UserController@index')->name('users.index');
        Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

        Route::resource('/faq', 'FAQController');
    });
});
