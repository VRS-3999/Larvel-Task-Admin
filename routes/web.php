<?php
    Route::get('/','TaskController@index');
    Route::post('/task/create','TaskController@store')->name('title.create');
    Route::delete('/task/delete/{task}','TaskController@destroy')->name('title.destroy');