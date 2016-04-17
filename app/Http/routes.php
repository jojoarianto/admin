<?php

Route::group(['middleware' => ['web']], function () {
    
    Route::auth();
    // Route::get('/home', 'HomeController@index');
    Route::get('/', ['as'=>'admin.soal.index',  'middleware' => ['auth'], 'uses'=>'Admin\SoalController@index']);

	// Admin URL GROUP
    Route::group( ['prefix'=>'', 'middleware' => ['auth'] ], function(){
	    Route::group(['prefix'=>'soal'], function(){
		    Route::get('/',['as'=>'admin.soal.index', 'uses'=>'Admin\SoalController@index']);
		    Route::get('/create',['as'=>'admin.soal.create', 'uses'=>'Admin\SoalController@create']);
	    });
    });

});