
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

Route::get('/', function(){
    return view('home');
});

Route::get('/onderwerpen', function () {
    return view('onderwerpen');
});

Route::get('/wonen', function(){
    return view('subjects.wonen');
});

Route::get('/wonen1', function(){
    return view('subsubjects.wonen.wonen_blok1');
});

Route::get('/wonen2', function(){
    return view('subsubjects.wonen.wonen_blok2');
});

Route::get('/wonen3', function(){
    return view('subsubjects.wonen.wonen_blok3');
});

Route::get('/wonen4', function(){
    return view('subsubjects.wonen.wonen_blok4');
});

Route::get('/soliciteren', function(){
    return view('subjects.soliciteren');
});

Route::get('/solliciteren1', function(){
    return view('subsubjects.solliciteren.solliciteren_blok1');
});

Route::get('/solliciteren2', function(){
    return view('subsubjects.solliciteren.solliciteren_blok2');
});

Route::get('/finacien', function(){
    return view('subjects.financien');
});

Route::get('/financien1', function(){
    return view('subsubjects.financien.financien_blok1');
});

Route::get('/financien2', function(){
    return view('subsubjects.financien.financien_blok2');
});

Route::get('/financien3', function(){
    return view('subsubjects.financien.financien_blok3');
});

Route::get('/financien4', function(){
    return view('subsubjects.financien.financien_blok4');
});

Route::get('/financien5', function(){
    return view('subsubjects.financien.financien_blok5');
});

Route::get('/financien6', function(){
    return view('subsubjects.financien.financien_blok6');
});

Route::get('/financien7', function(){
    return view('subsubjects.financien.financien_blok7');
});


Route::get('/vervoer', function(){
    return view('subjects.vervoer');
});

Route::get('/vervoer1', function(){
    return view('subsubjects.vervoer.vervoer_blok1');
});

Route::get('/vervoer2', function(){
    return view('subsubjects.vervoer.vervoer_blok2');
});

Route::get('/vervoer3', function(){
    return view('subsubjects.vervoer.vervoer_blok3');
});

Route::get('/hobby', function(){
    return view('subjects.hobby');
});

Route::get('/hobby1', function(){
    return view('subsubjects.hobby.hobby_blok1');
});

Route::get('/hobby2', function(){
    return view('subsubjects.hobby.hobby_blok2');
});

Route::get('/hobby3', function(){
    return view('subsubjects.hobby.hobby_blok3');
});

Route::get('/huishouden', function(){
    return view('subjects.huishouden');
});

Route::get('/huisblok1', function(){
    return view('subsubjects.huishouden.huishouden_blok1');
});

Route::get('/huisblok2', function(){
    return view('subsubjects.huishouden.huishouden_blok2');
});

Route::get('/huisblok3', function(){
    return view('subsubjects.huishouden.huishouden_blok3');
});

Route::get('/gezondheid', function(){
    return view('subjects.gezondheid');
});

Route::get('/gezond1', function(){
    return view('subsubjects.gezondheid.gezond_blok1');
});

Route::get('/gezond2', function(){
    return view('subsubjects.gezondheid.gezond_blok2');
});

Route::get('/gezond3', function(){
    return view('subsubjects.gezondheid.gezond_blok3');
});

Route::get('/about', function(){
    return view('about');
});



Route::get('/practicesoverview', 'PracticesController@home');
Route::get('/practice', 'PracticesController@practice');
Route::post('/addPractice', 'PracticesController@addPractice');
Route::post('search', 'PracticesController@search');

Route::get('/profile', 'ProfileController@profile');
Route::post('/addProfile', 'ProfileController@addProfile');

Route::get('/category', 'CategoryController@category');
Route::get('/category/{id}','PracticesController@category');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']],function(){
    Route::get('/view/{practice_id}', 'PracticesController@view');
    Route::post('/comment/{practice_id}', 'PracticesController@comment');
    Route::get('/like/{practice_id}', 'PracticesController@like');
    Route::get('/dislike/{practice_id}', 'PracticesController@dislike');

    Route::get('/vragen', 'PracticesController@vragen');

    Route::get('/edit/{id}', 'PracticesController@edit');
    Route::post('/editPractice/{id}','PracticesController@editPractice');
    Route::get('/delete/{id}', 'PracticesController@delete');
    
    Route::post('/addCategory', 'CategoryController@addCategory');
});