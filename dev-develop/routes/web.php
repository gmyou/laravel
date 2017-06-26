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

Route::get('auth/login', function () {

    $credentials = [
        'email' => 'john@example.com',
        'password' => 'pasword'
    ];

    if (! auth()->attempt($credentials) ) {
        return '로그인 정보가 정확하지 않습니다.';
    }

    return redirect('protected');

});

Route::get('protected', function () {

    dump(session()->all());

    if (! auth()->check() ) {
        return '누구세요?';
    }

    return '어서 오세요' . auth()->user()->name;

});

Route::get('auth/logout', function(){

    auth()->logout();

    return '또 뵈요~';

});
Auth::routes();

Route::get('/home', 'HomeController@index');
