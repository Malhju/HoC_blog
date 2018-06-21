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

Route::get('/', function (){
 return view('welcome');
});
Route::resource('/admin/medias','AdminMediasController',['only' => ['index', 'create','edit','destroy']]);
Route::resource('/admin/comments','AdminCommentsController', ['only' =>['index', 'edit','destroy']]);
/*Route::resource('/admin/medias/upload','AdminMediasController');*/
/*Route::get('/admin/medias','AdminMediasController@index');*/
/*Route::get('/admin/medias/upload','AdminMediasController@create');*/
/*Route::get('/admin/medias/edit','AdminMediasController@edit');*/
/*Route::get('/admin/medias/delete','AdminMediasController@destroy');*/