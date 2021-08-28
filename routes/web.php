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

Route::get('/', 'TasksController@index');
// Route::resource('tasks', 'TasksController');

Route::group(['middleware' => ['auth']], function () {
    // ここに指定したルーティングはログインしていないとアクセスできない
    // タスク関連の操作(一覧表示/詳細表示/編集/更新/新規作成/登録/削除)のルーティング
    Route::resource('tasks', 'TasksController', ['only' => ['show', 'edit', 'create']]);
});

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');