<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function ()
{
    Route::post('signin', 'SignInController');
    Route::post('signout', 'SignOutController');
    Route::post('signup', 'SignUpController');

    Route::get('me', 'MeController');
});

Route::group(['prefix' => 'view'], function ()
{
    Route::get('', 'ViewUsersController');
    Route::get('byId', 'ViewUsersController@byId');
    Route::get('byName', 'ViewUsersController@byName');
    Route::get('byEmail', 'ViewUsersController@byEmail');
});