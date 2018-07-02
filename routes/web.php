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

/**
 * Routes du côté Admin
 */

//David
Route::group(['middleware' => 'auth'], function(){
    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/posts', 'AdminPostsController',['except'=>['store','destroy']]);

    //Hafidou
    Route::resource('admin/photos','AdminPhotosController',['only' => ['index', 'upload', 'edit', 'destroy']]);
    Route::resource('admin/comments','AdminCommentsController', ['only' =>['index', 'edit','destroy']]);

    //Yassin

    Route::get('admin', 'AdminController@dashboard');
    Route::resource('admin/users', 'AdminUsersController', ['except'=>['store', 'update', 'destroy']]);
});
/**
 * Routes du côté utilisateur
 */
Route::get('/', 'HomeController@index');

Route::resource('/posts', 'PostsController', ["only"=>[
    "index", "show"
]]);
Route::resource('/categories', 'CategoriesController', ["only"=>[
    "index", "show"
]]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
