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
use App\Tasks;



//Route::get('/tasks','TasksController@index');
//Route::get('/tasks/{task}','TasksController@show');


Route::get('/province/{id}',function($id){
   $test = App\Models\Province::find($id);
   dd($test->name);
});


Route::get('about',function(){
    return view('about');
});
Route::get('my-cv','MycvController@index');




Route::get('/','PostsController@index');
Route::get('/posts/{post}','PostsController@show');
Route::get('/post/create','PostsController@create');
Route::post('/posts','PostsController@store');

