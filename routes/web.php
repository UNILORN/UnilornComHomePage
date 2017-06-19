<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('main.top');
});

Route::get('/git/pulling',function (Request $request){
    $pass = $request->get('pass');
    if($pass == env('GIT_PASS')){
        exec('git pull origin master');
    }
});

Auth::routes();
