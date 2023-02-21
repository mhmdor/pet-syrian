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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(
  [

    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']

  ],
  function () {

    Route::get('', 'HomeController@index')->name('home');
    Auth::routes(['verify' => true]);
    Route::get('alltype/{type}', 'AdsController@alltype')->name('ads.alltype');
    Route::get('show/{slug}', 'AdsController@show')->name('ads.show');
  }
);










#############################################   Ads route  ###################################################
Route::group(
  [

    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']

  ],
  function () {

    Route::group(
      ['prefix' => 'ads'],
      function () {
        Route::get('', 'AdsController@index')->middleware('isAdmin')->name('ads');
        Route::get('ads', 'AdsController@ads')->middleware('isAdmin')->name('adsin');
        Route::get('adsAnm', 'AdsController@adsAnm')->middleware('isAdmin')->name('adsinAnm');
        Route::get('adsAnmact', 'AdsController@adsAnmact')->middleware('isAdmin')->name('adsinAnmact');
        Route::get('adsAnmdeact', 'AdsController@adsAnmdeact')->middleware('isAdmin')->name('adsinAnmdeact');
        Route::get('adsact', 'AdsController@adsact')->middleware('isAdmin')->name('adsinact');
        Route::get('adsdeact', 'AdsController@adsdeact')->middleware('isAdmin')->name('adsindeact');
        Route::get('user', 'AdsController@user')->middleware('isAdmin')->name('user');
        Route::get('trashed', 'AdsController@adstrashed')->name('ads.trashed');
        Route::get('trashedM', 'AdsController@adstrashedMy')->name('ads.trashedMy');   
        Route::get('create', 'AdsController@create')->name('ads.create');
        Route::post('store', 'AdsController@store')->name('ads.store');
        Route::get('create-accessoires', 'AdsController@createAccessories')->name('ads.createAccessories');
        Route::post('store-accessoires', 'AdsController@storeAccessories')->name('ads.storeAccessories');
        Route::get('userADS/{user_id}', 'AdsController@userADS')->name('ads.userADs');
        Route::get('myADS', 'AdsController@myADS')->name('ads.myADS');
        Route::get('edit/{id}', 'AdsController@edit')->name('ads.edit');
        Route::post('update/{id}', 'AdsController@update')->name('ads.update');
        Route::get('destroy/{id}', 'AdsController@destroy')->name('ads.destroy');
        Route::get('hdelete/{id}', 'AdsController@hdelete')->name('ads.hdelete');
        Route::get('restroe/{id}', 'AdsController@restore')->name('ads.restore');
        Route::get('liked/{id}', 'AdsController@fav')->name('ads.fav');
        Route::get('fav', 'AdsController@getfav')->name('ads.getfav');
        Route::get('dact/{id}', 'AdsController@dact')->name('ads.dact');
        Route::get('act/{id}', 'AdsController@act')->name('ads.act');
        Route::post('/comment', 'AdsController@comment')->name('ads.comment');
        Route::get('/showcom', 'AdsController@showcom')->name('ads.showcom');
        Route::get('/com', 'AdsController@com')->name('ads.com');
        Route::get('deletecom/{id}', 'AdsController@deletecom')->name('ads.deletecom');

        
      }
    );
  }
);



###############################profile###################################

Route::group(
  [

    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']

  ],
  function () {

    Route::group(['prefix' => 'profile'], function () {
      Route::get('/', 'profileController@index')->name('profile');
      Route::post('update', 'profileController@update')->name('profile.update');
    });
  }
);






Route::get('admin', 'profileController@admin')->name('admin');
Route::post('admin/login', 'profileController@adminlogin')->name('admin.login');
