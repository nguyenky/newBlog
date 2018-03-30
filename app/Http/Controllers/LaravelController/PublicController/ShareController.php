<?php

namespace App\Http\Controllers\LaravelController\PublicController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
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
}