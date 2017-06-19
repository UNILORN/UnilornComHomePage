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

Route::post('/git/pulling',function (\Illuminate\Http\Request $request){
    $pass = $request->input('secret');
    if($pass == env('GIT_PASS')){
        exec('git pull origin master');
        return "Success!!!\n";
    }
    var_dump($request->all());
    return "Bad...\n ";
});

Auth::routes();
