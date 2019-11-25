<?php

    Route::group(['namespace' => 'n6solutions\contact\Http\Controllers'], function () {
        Route::get('contact', 'ContactController@index');

        Route::post ('send','ContactController@DbSave')->name('send');
    });
