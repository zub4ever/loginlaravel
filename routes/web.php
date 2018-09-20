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

Route::get('/', "HomeController@index")->name('login');
Route::POST('/login', "HomeController@login");

Route::group(['middleware'=>['auth']],function(){
   
  Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
    });
    
    Route::get('/painel', "HomeController@painel")->name('painel');       

});
