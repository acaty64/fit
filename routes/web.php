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
    return view('welcome');
});

Route::post('/equivalencias/create/', [
	'as' => 'app.equivalencias.create',
	'uses' => 'EquivalenciaController@create',
]);

Route::post('/equivalencias/edit/', [
	'as' => 'app.equivalencias.edit',
	'uses' => 'EquivalenciaController@edit',
]);

Route::post('/equivalencias/destroy/', [
	'as' => 'app.equivalencias.destroy',
	'uses' => 'EquivalenciaController@destroy',
]);

Route::get('/prueba1', function () {
    return view('app.prueba');
});

Route::get('/prueba2', function () {
    $data = [
    	'blocks' => [
	    	[	'row' => 1,
	    		'col' => 1,
	    		'text' => '100001', ],
	    	[	'row' => 1,
	    		'col' => 4,
	    		'text' => '400001', ],
	    	[	'row' => 2,
	    		'col' => 2,
	    		'text' => '200001', ],
	    	[	'row' => 1,
	    		'col' => 3,
	    		'text' => '300001', ],
    	],
    	'lines' => [
	    	[
	    		'row1' => 1,
	    		'col1' => 1,
	    		'row2' => 2,
	    		'col2' => 2,
	    	],
	    	[
	    		'row1' => 1,
	    		'col1' => 1,
	    		'row2' => 1,
	    		'col2' => 3,
	    	],
	    	[
	    		'row1' => 1,
	    		'col1' => 1,
	    		'row2' => 1,
	    		'col2' => 4,
	    	],

    	],
    ];

    return view('app.prueba2')->with('data',$data);
});

// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
