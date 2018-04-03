<?php

Route::get('/', 'FrontController@index')->name('front.index');
Route::post('/ticket_subscribed', 'FrontController@subscribe')->name('front.subscribe');
