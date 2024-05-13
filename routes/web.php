<?php

use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
    Route::get('/', 'FrontendController@home')->name('home');
    Route::get('about-us', 'FrontendController@about')->name('about');
    Route::get('careers', 'FrontendController@careers')->name('careers');
    Route::match(['get', 'post'], 'contact-us', 'FrontendController@contact')->name('contact');

    Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
        Route::get('shipping', 'FrontendController@logistics')->name('logistics');
        Route::get('oil', 'FrontendController@oil')->name('oil');
        Route::get('gas', 'FrontendController@gas')->name('gas');
    });


    Route::resource('blog', BlogController::class)->parameters(['blog' => 'post:slug']);

    Route::get('shop', 'FrontendController@shop')->name('shop');
});


Route::prefix('admin')->group(function () {
    Route::get('overview', 'AdminController@overview')->name('admin.overview');


    Route::prefix('page')->group(function () {
        Route::get('{slug?}', 'PagesController@index')->name('admin.pages');
        Route::get('{slug}/create', 'PagesController@create')->name('admin.pages.create');
        Route::post('{slug}/store', 'PagesController@store')->name('admin.pages.store');
        Route::get('edit/{page:slug}', 'PagesController@edit')->name('admin.pages.edit');
        Route::post('edit/{page:slug}', 'PagesController@update')->name('admin.pages.update');
    });

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

