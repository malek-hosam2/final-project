<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('contact', function () {
    $name = "malek";
   
    return view('contact', compact('name')); 
});
Route::post('/send', function () {
    $name = $_REQUEST['name'];

    return view('contact', compact('name')); 
});

Route::get('tasks' , function(){

    $tasks = [

        'task 1',
        'task 2',
        'task 3'

    ];
    return view('tasks' , compact('tasks'));
});

