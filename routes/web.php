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

Route::resources([
    'groups' => 'GroupController',
    'students' => 'StudentController',
    'marks' => 'MarkController',
    'subjects' => 'subjectController'
  ]);

  Route::get('/student/{id}', 'StudentController@filter');
  Route::get('average', 'AverageController@index');
