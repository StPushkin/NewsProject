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
Route::get('categories/{id}', 'ArticleController@articlesByCategory');
Route::get('categories/view/{id}', 'ArticleController@show');
Route::resource('journalist/posts', 'Journ\\PostsController');
Route::get('journalist/posts/create', 'Journ\\PostsController@cate');
Route::get('journalist/posts/{id}/edit', 'Journ\\PostsController@cateid');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');



Auth::routes();




