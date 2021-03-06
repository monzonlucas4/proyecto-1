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

Route::get('/', 'PagesController@getHome')->name('home');
Route::get('/home', 'PagesController@getHome')->name('home');
Route::get('/otherProfile/{user}', 'PagesController@getOtherProfile')->name('otherProfile');
Route::get('/otherList/{lista}', 'PagesController@getOtherList')->name('otherList');
Route::get('/settings', 'PagesController@getSettings')->name('settings');
Route::get('/readme', 'PagesController@getReadme')->name('readme');

Route::get('/myLists', 'listsController@getMyLists')->name('index');
Route::get('/createList', 'listsController@createList')->name('create');
Route::post('/myLists', 'listsController@storeList')->name('store');
Route::get('/myList/{lista}/show', 'listsController@showList')->name('show');
Route::get('/myList/{lista}/edit', 'listsController@editList')->name('edit');
Route::patch('/myList/{lista}', 'listsController@updateList')->name('update');
Route::delete('/myList/{lista}', 'listsController@destroyList')->name('delete');


Route::post('/myList/{lista}/edit', 'goalsController@storeGoal')->name('store');
Route::delete('/myList/{lista}/{goles}', 'goalsController@destroyGoal')->name('delete');

Route::get('/profile', 'profileController@getProfile')->name('profile');
Route::get('/settings', 'profileController@getSettings')->name('settings');
Route::patch('/settings', 'profileController@updateUser')->name('update');
Route::post('/settings', 'profileController@update_avatar')->name('update_avatar');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

