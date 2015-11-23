<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/user/creat', function () {
    return view('create');
});

Route::post('telephone/create/', ['as' => "telephone.create", 'uses' => 'TelephoneController@create']);

Route::post('user/{id}/telephoneCreate', ['as' => 'user.telephoneCreate', function () {
    return view('telephoneCreate');
}]);

Route::post('/user/create', ['as' => 'user.create', 'uses' => 'UserController@save']);

//Route::post('/telephone/create', ['as' => 'telephone.create', 'uses' => 'TelephoneController@create']);

Route::any('/user/show/{id}', ['as' => 'user.show', 'uses' => 'UserController@show']);

Route::any('/user/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);

Route::any('/user/update/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);

Route::any('/user/destroy/{id}', ['as' => 'user.destroy', 'uses' => 'UserController@destroy']);

Route::any('/', ['as' => 'user.index', 'uses' => 'UserController@index']);
