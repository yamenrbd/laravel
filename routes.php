<?php
use App\Post;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about',function(){
//
//    return "hi about page";
//
//});
//
//Route::get('/post/{id}/{name}',function($id,$name){
//
//    return "hi your name is $id and your name is $name";
//});
//
//Route::get('post/{id}','PostsController@index');

//Route::resource('posts','PostsController');

//Route::get('contact','PostsController@contact');
//
//Route::get('post/{id}/{name}/{password}','PostsController@show_post');

//=============================================================
//DATABASE ROW SQL QUERY
//=============================================================

//Route::get('/insert',function(){
//
//   DB::insert('insert into posts(title,content)VALUES (?,?)',['php1','great']);
//});

//Route::get('/red',function(){
//
//    $result = DB::select('select * from posts where id=(?)',[1]);
//
//    if(count($result)){
//        foreach ($result as $item){
//            return $item->title;
//        }
//    }
//});

//Route::get('/insert',function(){
//   DB::insert('insert into posts (title,content)VALUES (?,?)',['php2','laravel is the greates ']);
//});
//
//Route::get('/delete',function(){
//   DB::delete('delete from posts where id=(?)',[1]);
//
//});

//Route::get('/update',function(){
//   DB::update('update  posts set   title="php1" where id=(?) ',[3]);
//});

//=======================================================
//ELOQUENT SQL DATABASE
//========================================================

//Route::get('/read',function (){
//
//    $result = Post::all();
//    foreach ($result as $item){
//        return $item->title;
//    }
//});
//
//Route::get('/find',function (){
//   $result = Post::find(3);
//    return $result->title;
//});

//Route::get('/findif',function (){
//
//    return Post::where('title','php2')->get();
//
//});
