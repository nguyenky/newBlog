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
	// Musical
	Route::resource('playlists', 'PlaylistAPIController');
});
// PUBLIC
Route::group(['prefix'=>'public'],function(){
	// Musical
	
	/// Posts
	Route::get('getPostPublic','PostAPIController@getPostPublic');
	Route::get('getNewsPublic','NewsAPIController@getNewsPublic');
	Route::get('getNewDetail/{id}','NewsAPIController@show');
	Route::get('like/{id}','NewsAPIController@like');
	Route::get('unlike/{id}','NewsAPIController@unLike');
	Route::get('getInstagram','ProfileAPIController@getInstagram');
	Route::get('getCategory','CategoryAPIController@getCategory');
	Route::get('getNewsSite/{id}','NewsAPIController@getNewsSite');
});

Route::get('getProfile/{id}','ProfileAPIController@getProfile');
Route::resource('pictures', 'PictureAPIController');





