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

Route::domain('blog.leompat.dev')->group(function(){
    Route::get('{category}/{slug?}', "BlogController@show")->where('slug', "['A-Za-z']+");
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('hellos', function(){
    return "Hello world!";
})->name('hello');

Route::get('test-index', "TestController@index")->middleware('test:500');

Route::redirect('redir', 'hello');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('dashboard', "DashboardController@index")->name('dashboard');
    Route::get('account', "AccountController@index")->name('account');
});

Route::get('user/{user}', function(\App\User $user){
    return $user->name;
});