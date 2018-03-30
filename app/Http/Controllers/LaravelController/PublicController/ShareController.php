<?php

namespace App\Http\Controllers\LaravelController\PublicController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
class ShareController extends Controller
{
  public function getInstagram(){
    $str = file_get_contents("https://api.instagram.com/v1/users/2293866932/media/recent/?access_token=2293866932.1677ed0.5fb0088e7ad44161a69a2de237d04fa7");

    $json = json_decode($str, true);
    return $json;
  }
  public function shareStatus(){
    $status = Post::orderBy('id','DESC')->select('id','caption')->limit(1)->first();
    return $status;
  }
  // public function categories(){
    // $categories = Category::select('id','name')->get();
    // foreach ($categories as $key => $cat) {
    //     if($cat->news()){
    //         $cat->count = $cat->news()->count();
    //     }else{
    //         $cat->count = 0;
    //     }
    // }
    // return $categories;
  }
}
