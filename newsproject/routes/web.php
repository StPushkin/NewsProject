<?php










/***************    Site routes  **********************************/
Route::get('/', 'HomeController@articles');
Route::get('welcom', 'HomeController@welcom');


Route::get('categories','HomeController@categories');
Route::get('categories/{id}', 'HomeController@articlesByCategory');
Route::get('articletop','HomeController@articlesByTop');
Route::get('articles', 'HomeController@articles');
Route::get('commadd', 'ArticleController@showc');
Route::get('view/{id}', 'ArticleController@show');
Route::get('viewcat/{id}', 'ArticleController@articlesByCategory');

Auth::routes();




