
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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']],function(){

    Route::get('/practicesoverview', 'PracticesController@home');
    Route::get('/practice', 'PracticesController@practice');
    Route::post('/addPractice', 'PracticesController@addPractice');
    Route::get('/view/{id}', 'PracticesController@view');
    Route::get('/edit/{id}', 'PracticesController@edit');
    Route::post('/editPractice/{id}','PracticesController@editPractice');
    Route::get('/delete/{id}', 'PracticesController@delete');
    Route::get('/like/{id}', 'PracticesController@like');
    Route::get('/dislike/{id}', 'PracticesController@dislike');
    Route::post('/comment/{id}', 'PracticesController@comment');
    Route::post('search', 'PracticesController@search');

    Route::get('/profile', 'ProfileController@profile');
    Route::post('/addProfile', 'ProfileController@addProfile');

    Route::get('/category', 'CategoryController@category');
    Route::post('/addCategory', 'CategoryController@addCategory');
    Route::get('/category/{id}','PracticesController@category');

});