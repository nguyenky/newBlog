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
// Route::get('/', function () {
//     return view('public.index');
// });

// Route::get('/admin',function(){
// 	return view('admin.index');
// });
// Route::get('/upload',function(){
// 	// return view('public.index');
// 	dd('ssf');
// });

Route::group(['namespace'=>'LaravelController\PublicController'],function(){
	Route::get('/upload','HomeController@getUpload');
	Route::post('/upload','HomeController@upload')->name('upload');
  	Route::get('/','HomeController@home');


});


Route::get('/update',function(){
	$news = News::where('category_id',3)->get();
	// News::truncate();
  // dd($news);
	foreach ($news as $key => $value) {
		// News::create($value);
    $value->update(['category_id'=>21]);
    $value->save();
	}
  $news4 = News::where('category_id',4)->get();
	// News::truncate();
  // dd($news);
	foreach ($news4 as $key => $value) {
		// News::create($value);
    $value->update(['category_id'=>31]);
    $value->save();
	}
  $news5 = News::where('category_id',5)->get();
	// News::truncate();
  // dd($news);
	foreach ($news5 as $key => $value) {
		// News::create($value);
    $value->update(['category_id'=>41]);
    $value->save();
	}
  $news6 = News::where('category_id',6)->get();
	// News::truncate();
  // dd($news);
	foreach ($news6 as $key => $value) {
		// News::create($value);
    $value->update(['category_id'=>51]);
    $value->save();
	}
  $news7 = News::where('category_id',7)->get();
	// News::truncate();
  // dd($news);
	foreach ($news7 as $key => $value) {
		// News::create($value);
    $value->update(['category_id'=>61]);
    $value->save();
	}
	// $post = News::all();
	// return [
  //               'status' => true,
  //               'data' => $post,
  //           ];
	// $news = News::all();
	// foreach ($news as $key => $value) {
	// 	$value->update(['picture'=>url('storage/app/public/default-new.png')]);
	// 	$value->save();
	// }
	// dd($news);
});
