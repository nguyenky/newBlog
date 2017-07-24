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
// use Intervention\Image\Image;
 use Intervention\Image\Facades\Image;

Route::get('/', function () {
    return view('public.index');
});
Route::get('/admin',function(){
	return view('admin.index');
});
Route::get('/public',function(){
	return view('public.index');
});



Auth::routes();

Route::get('/home', 'HomeController@index');





Route::resource('users', 'UserController');
Route::post('demoUpload','demoCtrl@index');
