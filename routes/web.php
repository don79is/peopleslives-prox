<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('main');
});

Route::get('/peoples',[
    'uses' => 'LOLPeoplesController@index'
]);
Route::get('/generate-fake-data/peoples/{count?}', [
    'uses' => 'LOLFakeDataController@generatePeoples'
]);

Route::get('/hobbies',[
    'uses' => 'LOLHobbiesController@index'
]);
Route::get('/generate-fake-data/hobbies/{count?}', [
    'uses' => 'LOLFakeDataController@generateHobbies'
]);
Route::get('/peoplesHobbiesConnections',[
    'uses' => 'LOLPeoplesHobbiesConnectionsController@index'
]);
Route::get('/generate-fake-data/peoplesHobbiesConnections/{count?}', [
    'uses' => 'LOLFakeDataController@generatePeoplesHobbiesConnections'
]);
Route::group(['prefix' => 'cities'], function () {
    Route::get('/', [
        'uses' => 'LOLCitiesController@index'
    ]);
    Route::get('/generate/{count?}', [
        'uses' => 'LOLFakeDataController@generateCities'
    ]);
    Route::get('/form/', [
        'uses' => 'LOLCitiesController@form'
    ]);
    Route::post('/form/', [
        'as' => 'create.city',
        'uses' => 'LOLCitiesController@addCity'
    ]);
});
Route::get('hobbies/form/', [
    'uses' => 'LOLHobbiesController@form'
]);
Route::post('hobbies/form/', [
    'as' => 'create.hobby',
    'uses' => 'LOLHobbiesController@addHobby'
]);
Route::get('peoples/form/', [
    'uses' => 'LOLPeoplesController@form'
]);
Route::post('peoples/form/', [
    'as' => 'create.person',
    'uses' => 'LOLPeoplesController@addPerson'
]);


