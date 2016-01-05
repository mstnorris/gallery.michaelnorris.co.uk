<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PhotoController@gallery');
    Route::get('config.xml', 'PhotoController@xml');
});
