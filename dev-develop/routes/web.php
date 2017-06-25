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
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
  $view = view('index');
  $view->title = 'laravel';

  $view->items = [
          'macOS Sierra 10.12.3(16D32)',
          'PHP 7.1.1',
          'ruby',
          'brew',
          'composer'
      ];

  return $view;
});
*/

Route::get('/', 'WelcomController@index');
Route::resource('articles', 'ArticlesController');