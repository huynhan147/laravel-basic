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

Route::get('/', function () {
    $task = [
        'Go to store',
        'Test Laravel',
        'Laravel Basic'


    ];
    return view('welcome',compact('task'));
});
Route::get('about',function(){
    return view('about');
});
