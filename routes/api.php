<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'auths'],function(){
	Route::post('login','AuthController@login');
	Route::post('/register','UserAPIController@store');
});

// ADMIN
Route::group(['prefix'=>'admin','middleware'=>'api.auth'],function(){
	// Profile / avatar
	Route::resource('profiles', 'ProfileAPIController');
	Route::post('uploadAvatar/{id}','ProfileAPIController@uploadAvatar');
	//Category
	Route::resource('categories', 'CategoryAPIController');
	Route::get('getAllCategory','CategoryAPIController@getAllCategory');
	Route::get('getAllCategoryTreeView','CategoryAPIController@getAllCategoryTreeView');
	// News
	Route::post('demo', 'NewsAPIController@demo');
	// User
	Route::resource('users', 'UserAPIController');
	//News
	Route::resource('news', 'NewsAPIController');
	Route::get('getAllNews','NewsAPIController@getAllNews');
	Route::post('addNews','NewsAPIController@addNews');
	Route::post('updateNews/{id}','NewsAPIController@update');
	// Image
	Route::post('upLoadFile','ImageController@addImage');
	// Posts
	Route::resource('posts', 'PostAPIController');
});
// PUBLIC
Route::group(['prefix'=>'public'],function(){
	Route::get('getPostPublic','PostAPIController@getPostPublic');
});

Route::get('getProfile/{id}','ProfileAPIController@getProfile');
Route::resource('pictures', 'PictureAPIController');



