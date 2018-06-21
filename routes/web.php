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

//Hafidou
Route::resource('/admin/medias','AdminMediasController',['only' => ['index', 'create','edit','destroy']]);
Route::resource('/admin/comments','AdminCommentsController', ['only' =>['index', 'edit','destroy']]);

//Yassin
Route::get('admin', 'AdminController@dashboard');
Route::resource('admin/users', 'AdminUsersController', ['except'=>['store', 'update', 'destroy']]);
Route::resource('admin/posts', 'AdminPostsController', ['except'=>['store', 'update', 'destroy']]);

/**
 * Routes du côté utilisateur
 */
Route::get('/', 'HomeController@home');
Route::resource('/posts', 'PostsController', ["only"=>[
    "index", "show"
]]);
Route::resource('/categories', 'CategoriesController', ["only"=>[
    "index", "show"
]]);
