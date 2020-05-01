<?php
    Route::get('/','TaskController@index');
    Route::post('/task/create','TaskController@store')->name('title.create');