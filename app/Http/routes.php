<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

	
});


// Route::get('/about', function () {
//     return "Hi About page";

	
// });


// Route::get('/contact', function () {
//     return "Hi contact";

	
// });

// Route::get('/post/{id}/{name}', function($id, $name){
// return "this is post no " . $id . " " . $name;
// });

// Route::get('admin/posts/example',array('as'=>'admin.home', function(){

// 	$url = route('admin.home');
// 	return "this urlis " . $url;


// }));

// Route::get('/post/{id}', 'PostController@index');
Route::resource('posts', 'PostController');

Route::get('/contact','PostController@contact');

Route::get('/about','PostController@about');

Route::get('/me', 'PostController@me');

Route::get('post/{id}/{name}/{pass}','PostController@ShowPost');
Route::get('postAgain/{id}/{name}/{pass}', 'PostController@ShowPostAgain');