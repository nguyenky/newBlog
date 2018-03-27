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
 use App\Models\News;
Route::get('/', function () {
    return view('public.index');
});
Route::get('/admin',function(){
	return view('admin.index');
});
// Route::get('/upload',function(){
// 	// return view('public.index');
// 	dd('ssf');
// });

Route::group(['namespace'=>'LaravelController\PublicController'],function(){
	Route::get('/upload','HomeController@getUpload');
	Route::post('/upload','HomeController@upload')->name('upload');
	
});


Route::get('/update',function(){
	$news_old = News::all();
	// News::truncate();
	foreach ($news_old as $key => $value) {
		News::create($value);
	}
	$post = News::all();
	return [
                'status' => true,
                'data' => $post,
            ];
	// $news = News::all();
	// foreach ($news as $key => $value) {
	// 	$value->update(['picture'=>url('storage/app/public/default-new.png')]);
	// 	$value->save();
	// }
	// dd($news);
});