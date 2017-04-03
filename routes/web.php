<?php

use Notebook\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('frontpage');
    })->name('notebooks.frontpage');
    
    /*Route::get('/notebooks', [
    'uses' => 'NotebooksController@index',
    'as' => 'notebooks.index'
    ]);

    Route::post('/notebooks', [
        'uses' => 'NotebooksController@store',
        'as' => 'notebooks.store'
    ]);

    Route::get('/notebooks/create', [
        'uses' => 'NotebooksController@create',
        'as' => 'notebooks.create'
    ]);

    Route::get('notebooks/{notebooks}/edit', [
        'uses' => 'NotebooksController@edit',
        'as' => 'notebooks.edit'
    ]);

    Route::put('notebooks/{notebooks}', [
        'uses' => 'NotebooksController@update',
        'as' => 'notebooks.update'
    ]);

    Route::delete('/notebooks/{notebooks}', [
        'uses' => 'NotebooksController@destroy',
        'as' => 'notebooks.destroy'
    ]);
    
    Route::get('/notebooks/{notebooks}', [
        'uses' => 'NotebooksController@show',
        'as' => 'notebooks.show'
    ]);*/
    
    Route::resource('notebooks', 'NotebooksController');
    Route::resource('notes', 'NotesController');
    
    Route::get('notes/{notebookId}/createNote', [
        'uses' => 'NotesController@createNote',
        'as' => 'notes.createNote'
    ]);
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
