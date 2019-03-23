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

//Route::post('/git/pulling',function (\Illuminate\Http\Request $request){
//    $pass = $request->input('pass');
//    if($pass == sha1(env('GIT_PASS'))){
//        $res = exec('sh ~/homepage_shell.sh');
//        $text = "Success!!!\n".
//            $res;
//        return $text;
//    }
//    return "Bad...\n ";
//});

//Auth::routes();
