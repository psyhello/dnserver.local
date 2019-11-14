<?php

use App\Post;
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

Route::get('/', function (Post $posts) {

	$posts = Post::all()->SortByDesc('created_at');
    return view('welcome',compact('posts'));
      
     

});


Route::resource('issues','IssuesController');

Route::post('/issues/{issue}/comments','commentsController@store');

Route::delete('/comments/{comment}','commentsController@delete');

Route::resource('posts','PostsController');
Route::resource('depts','DeptController');
Route::resource('companies','CompanyController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
