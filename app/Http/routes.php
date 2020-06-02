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

// Route::get('/', function () {
//     return view('welcome');

	
// });


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
// Route::resource('posts', 'PostController');

// Route::get('/contact','PostController@contact');

// Route::get('/about','PostController@about');

// Route::get('/me', 'PostController@me');

// Route::get('post/{id}/{name}/{pass}','PostController@ShowPost');
// Route::get('postAgain/{id}/{name}/{pass}', 'PostController@ShowPostAgain');
/*
|----------------------------
| DATABASE RAW SQL QUERIES
|----------------------------
*/

Route::get('/insert',function(){

    DB::insert('insert into posts(title, content) values(?, ?)',['php with laravel','This is cool content']);
   

});

// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id = ?', [1]);
//     var_dump($results);
//     // foreach($results as $post){
//     //     return $post->title;
//     // }

// });

// Route::get('/update', function(){

//     //$updated = DB::update('update posts set title = "updated title" where id =?', [1]);
//     $updated = DB::update('update posts set title="title Update again" where id=?', [1]);

//     return $updated;


// });

Route::get('/delete', function(){
    DB::delete('delete from posts where id=?',[1]);
});
