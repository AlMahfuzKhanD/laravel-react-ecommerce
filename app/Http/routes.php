<?php

use App\Post;
use App\User;
use App\Country;
use App\Photo;

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

// Route::get('/insert',function(){

//     DB::insert('insert into posts(title, content) values(?, ?)',['php with laravel','This is cool content']);
   

// });

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

// Route::get('/delete', function(){
//     DB::delete('delete from posts where id=?',[1]);
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id=?',[2]);
//     return $deleted;
// });
// Route::get('/insert', function(){
//     DB::insert('insert into posts(title, content) values(?, ?)',['title','content']);
// });

// Route::get('/read', function(){
//     $results = DB::select('select * from posts');
//     foreach($results as $result){
//         return $result->title;
//     }
// });

/*
|----------------------------
| ELEQUENT
|----------------------------
*/

// Route::get('/read',function(){

//     $posts = Post::all();
//     foreach($posts as $post){

//         return $post->title;

//     }

// });

// Route::get('/find', function(){
//     $post = Post::find(5);
     

//         return $post->title;

    
// });

// Route::get('/findwhere', function(){
//     $posts = Post::where('id',4)->orderBy('id','desc')->take(1)->get();
//     return $posts;
// });

// Route::get('/findmore', function(){
//     // $posts = Post::findOrFail(3);
//     // return $posts;
//     $posts = Post::where('users_count','<', 50)->firstOrFail();
// });

// Route::get('/basicinsert', function(){
//     $post = new Post;

//     $post->title = 'new title';
//     $post->content = 'new content';

//     $post->save();
// }); 

// Route::get('/basicinsert4', function(){
//     $post = Post::find(4);

//     $post->title = 'new title 4';
//     $post->content = 'new content 4';

//     $post->save();
// }); 

// Route::get('/create', function(){
//     Post::create(['title'=>'the create', 'content'=>'I\'am learining a lot with php']);
// });

// Route::get('/update', function(){
//     Post::where('id',4)->where('is_admin',0)->update(['title'=>'updated title','content'=>'updated content']);
// });

// Route::get('/delete', function(){
//     $post = Post::find(4);
//     $post->delete();
// });

// Route::get('/delete2', function(){
//     Post::destroy([6,7]);
//     //Post::where('is_admin',0)
// });

// Route::get('softdeletes', function(){
//     Post::find(3)->delete();
// });

// Route::get('readsoftdeletes', function(){
//     // $post = Post::find(3);
//     // return $post;
//     // $post = Post::withTrashed()->where('id',3)->get();
//     // return $post;

//     $post = Post::onlyTrashed()->where('is_admin',0)->get();
//     return $post;
// });

// Route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin',0)->restore();
    
// });

// Route::get('/forcedelete', function(){
//     Post::withTrashed()->where('id',3)->forceDelete();
// });

/*
|----------------------------
| ELOQUENT relationship
|----------------------------
*/


// one to one relationship
// Route::get('/user/{id}/post', function($id){
//    return User::find($id)->post->title;
// });

// //inverse relationship
// Route::get('/post/{id}/user', function($id){
// return Post::find($id)->user->name;
// });

// //one to many relationship

// Route::get('/posts', function(){
//     $user = User::find(1);
//     foreach($user->posts as $post){
// echo $post->title . "<br>";
//     }
// });

// // many to many relationship

// Route::get('/user/{id}/role', function($id){
// $user = User::find($id)->roles()->orderBy('id','desc')->get();
// return $user;

// // foreach($user->roles as $role){
// //     return $role->name;
// // }
// });

// Accessing the intermidiate / pivot table

// Route::get('user/pivot', function(){
//     $user= User::find(1);

//     foreach($user->roles as $role){
// echo $role->pivot->created_at;
//     }

// });

// Route::get('/user/country', function(){
//     $country = Country::find(1);
//     foreach($country->posts as $post){
//         return $post->title;
//     }
// });

// polymorphic relationship

// Route::get('user/photos', function(){
// $user = User::find(1);

// foreach ($user->photos as $photo) {
//     return $photo->path;
// }
// });

// Route::get('post/photos', function(){
// $post = Post::find(1);

// foreach ($post->photos as $photo) {
//     echo $photo->path . "<br>";
// }
// });

Route::get('photo/{id}/post', function($id){
   $photo = Photo::findOrFail($id);
   return $photo->imageable;
});