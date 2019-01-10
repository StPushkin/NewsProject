<?php



/***************    Site routes  **********************************/
Route::get('/', 'HomeController@articles');
Route::get('welcom', 'HomeController@welcom');
Route::get('articlestop', 'HomeController@top');

Route::get('bytop', 'HomeController@bytop');
Route::get('bycategory', 'HomeController@bycategory');
Route::get('journalist', 'HomeController@bycategory');
Route::get('articles', 'HomeController@articles');
Route::get('article/{article}/show', 'ArticleController@show');
Route::get('article/{article}/add', 'ArticleController@add');
Route::get('article/{article}/edit', 'ArticleController@edit');
Route::get('auth', 'Auth\LoginController@auth');
Route::get('forgotpassword', 'Auth\ForgotPasswordController@forgot');
Route::get('register', 'Auth\RegisterController@register');



