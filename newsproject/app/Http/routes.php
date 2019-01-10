<?php
Route::any('/', ['uses' =>'ArticleController@addArticle', 'as' =>'addArticle' ]);
Route::any('/', ['uses' =>'ArticleController@editArticle', 'as' =>'editArticle' ]);
Route::any('/', ['uses' =>'ArticleController@updateActor', 'as' =>'updateActor' ]);

Route::any('/', ['uses' =>'CommentController@index', 'as' =>'index' ]);
Route::any('/', ['uses' =>'HomeController@articles', 'as' =>'articles' ]);
Route::any('/', ['uses' =>'HomeController@articlesByCategory', 'as' =>'articlesByCategory' ]);
Route::any('/', ['uses' =>'HomeController@articlesByTop', 'as' =>'articlesByTop' ]);
Route::any('/', ['uses' =>'HomeController@categories', 'as' =>'categories' ]);

Route::any('/', ['uses' =>'JournalistController@editJournalist', 'as' =>'editJournalist' ]);
Route::any('/', ['uses' =>'JournalistController@updateJournalist', 'as' =>'updateJournalist' ]);
