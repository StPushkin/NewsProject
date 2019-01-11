<?php



<<<<<<< HEAD
/***************    Site routes  **********************************/
Route::get('/', 'HomeController@articles');
Route::get('welcom', 'HomeController@welcom');
Route::get('articlestop', 'HomeController@top');

Route::get('bytop', 'HomeController@bytop');
Route::get('bycategory', 'HomeController@bycategory');
Route::get('journalist', 'HomeController@bycategory');
=======







/***************    Site routes  **********************************/
Route::get('/', 'HomeController@articles');
Route::get('welcom', 'HomeController@welcom');



>>>>>>> 3abaed00020454539897007aa6d3affe509d0f6d
Route::get('articles', 'HomeController@articles');
Route::get('commadd', 'ArticleController@showc');
Route::get('view/{id}', 'ArticleController@show');
Route::get('viewcat/{id}', 'ArticleController@articlesByCategory');




