<?php









/***************    Site routes  **********************************/
Route::get('/', 'HomeController@articles');
Route::get('welcom', 'HomeController@welcom');



Route::get('articles', 'HomeController@articles');

Route::get('view/{id}', 'ArticleController@show');
Route::get('viewbycat/{id}', 'ArticleController@articlesByCategory');
Route::get('viewbycat/view/{id}', 'ArticleController@show');



Route::get('dashboard', 'DashboardController@index');


Route::resource('admin/posts', 'Admin\\PostsController');
Route::get('admin/posts/create', 'Admin\\PostsController@cate');
Route::get('admin/posts/{id}/edit', 'Admin\\PostsController@cateid');




Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');


Auth::routes();





