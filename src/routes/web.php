<?php

Route::group(['namespace' => 'Kangyasin\Contact\Http\Controller'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});

