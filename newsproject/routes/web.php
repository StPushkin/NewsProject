<?php











/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('articlestop', 'HomeController@top');
Route::get('category', 'HomeController@index');
Route::get('articles', 'HomeController@index');
Route::get('bytop', 'HomeController@bytop');
Route::get('bycategory', 'HomeController@bycategory');

Route::get('articles', 'HomeController@articles');
Route::get('article/{article}/show', 'ArticleController@show');
Route::get('article/{article}/add', 'ArticleController@add');
Route::get('article/{article}/edit', 'ArticleController@edit');
Route::get('auth', 'Auth\LoginController@auth');
Route::get('forgotpassword', 'Auth\ForgotPasswordController@forgot');
Route::get('register', 'Auth\RegisterController@register');



