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
Route::get('/visi-misi/{slug}', 'LandingController@visiMisiDetail')->name('landing.visi_misi.detail');
Route::get('/kotak-aspirasi', 'LandingController@kotakAspirasi')->name('landing.kotak_aspirasi');
Route::post('/kotak-aspirasi', 'AspirasiController@store')->name('landing.kotak_aspirasi.store');
Route::get('/warta', 'LandingController@warta')->name('landing.warta');
Route::get('/tim', 'LandingController@tim')->name('landing.tim');
Route::get('/lapak', 'LandingController@lapak')->name('landing.lapak');
Route::get('/lapak/{id}', 'LandingController@lapakDetail')->name('landing.lapak_detail');
Route::get('dukung-sakti', 'LandingController@dukungSakti')->name('landing.dukung_sakti');
Route::get('dukung-sakti/success', 'LandingController@dukungSaktiSuccess')->name('landing.dukung_sakti.success');
Route::post('dukung-sakti', 'LandingController@dukungSaktiStore')->name('landing.dukung_sakti.store');

Route::get('/faq', 'LandingController@faq')->name('landing.faq');
Route::get('/detail/{id}', 'LandingController@detail');

Route::get('/artisan', function () {
    Artisan::call('storage:link');
});

Route::prefix('/admin')->group(function () {
    Auth::routes(['register' => false]);

    Route::resource('/product', 'ProductController');
    Route::middleware('auth')->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::resource('/category', 'CategoryController');
        Route::resource('/prodi', 'ProdiController');
        Route::resource('/rekam', 'RekamJejakController');
        Route::resource('/dukung-sakti', 'DukungSaktiController');

        Route::post('/product/image', 'ProductController@ImageProduct')->name('product.image');
        Route::post('/product/status/{id}', 'ProductController@status');

        Route::resource('/banner', 'BannerController');
        Route::resource('/galeri', 'GaleriController');
        Route::resource('/tim', 'TimController');
        Route::post('/tim/status/{id}', 'TimController@status');
        Route::get('/aspirasi', 'AspirasiController@index')->name('aspirasi.index');
        Route::put('/aspirasi', 'AspirasiController@balas')->name('aspirasi.balas');
        Route::delete('/aspirasi/{id}', 'AspirasiController@destroy')->name('aspirasi.destroy');
        Route::resource('/visi-misi', 'VisiMisiController');
        Route::resource('/program-kerja', 'ProgramKerjaController');

        Route::get('/profile', 'HomeController@profile')->name('profile.index');
        Route::post('/profile/{profile}', 'HomeController@updateProfile')->name('profile.update');

        Route::get('/settings', 'SettingsController@index')->name('settings.index');
        Route::post('/settings', 'SettingsController@update')->name('settings.update');

        Route::get('/users', 'UserController@index')->name('users.index');
        Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

        Route::resource('/faq', 'FAQController');
    });
});
