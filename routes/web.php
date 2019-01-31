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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

/*
 * Routing Conventions (memo)
 *
 * +----+-------------+------------------+---------+---------------------------------+
 * | ID | HTTP method | URL              | Method  | Description                     |
 * +----+-------------+------------------+---------+---------------------------------+
 * | 1  | GET         | /projects        | index   | Show all projects               |
 * | 2  | GET         | /projects/create | create  | Show a form to create a project |
 * | 3  | GET         | /projects/1      | show    | Show a single project           |
 * | 4  | GET         | /projects/1/edit | edit    | Show a form to edit a project   |
 * | 5  | POST        | /projects        | store   | Persist / store a new project   |
 * | 6  | PATCH       | /projects/1      | update  | Update a project                |
 * | 7  | DELETE      | /projects/1      | destroy | Delete a project                |
 * +----+-------------+------------------+---------+---------------------------------+
 */

/*
Route::get('/projects', 'ProjectsController@index'); // @see 1
Route::get('/projects/create', 'ProjectsController@create'); // @see 2
Route::get('/projects/{project}', 'ProjectsController@show'); // @see 3
Route::get('/projects/{project}/edit', 'ProjectsController@edit'); // @see 4
Route::post('/projects', 'ProjectsController@store'); // @see 5
Route::patch('/projects/{project}', 'ProjectsController@update'); // @see 6
Route::delete('/projects/{project}', 'ProjectsController@destroy'); // @see 7
*/

// OR
Route::resource('projects', 'ProjectsController');

