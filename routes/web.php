
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

Route::get('/wonen', function(){
    return view('subjects.wonen');
});

Route::get('/verzekeringen', function(){
    return view('subjects.verzekeringen');
});

Route::get('/belastingen', function(){
    return view('subjects.belastingen');
});

Route::get('/vervoer', function(){
    return view('subjects.vervoer');
});

Route::get('/hobby', function(){
    return view('subjects.hobby');
});

Route::get('/huishouden', function(){
    return view('subjects.huishouden');
});

Route::get('/gezondheid', function(){
    return view('subjects.gezondheid');
});

Route::get('/onderhoud', function(){
    return view('subjects.onderhoud');
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