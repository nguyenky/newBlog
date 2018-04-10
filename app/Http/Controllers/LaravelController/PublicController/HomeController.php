<?php

namespace App\Http\Controllers\LaravelController\PublicController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use RemoteImageUploader\Factory;
use App\Repositories\PostRepository;
use App\Repositories\NewsRepository;
use App\Models\Category;
use App\Models\Cat;
use App\Models\News;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    // public function getUpload(){
    // 	return view('LaravelView.PublicView.upload');
    // }
    // public function upload(Request $request){
    // 	$validator = Validator::make($request->all(), [
    //         'upload' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //         // gộp mảng errors thành chuỗi, cách nhau bởi dấu cách
    //         $message = implode(' ', $validator->errors()->all());
    //
    //         return [
    //             'status' => false,
    //             'url' => '',
    //             'message' => 'Upload fail! ' . $message,
    //         ];
    //     }
    //     // try {
    //         // Thực hiện create và upload photo với config đã cài sẵn
    //         // dd($request->upload);
    //         $result = Factory::create(config('uploadphoto.host'), config('uploadphoto.auth'))
    //             ->upload($request->upload->path());
    //
    //         return [
    //             'status' => true,
    //             'url' => $result,
    //             'message' => 'Upload successfull!',
    //         ];
    //     // } catch (\Exception $ex) {
    //     //     // Nếu bị Exception thì trả về message của Exception đó
    //     //     // Exception ở đây có thể là:
    //     //     // - host không hợp lệ
    //     //     // - api không hợp lệ
    //     //     // - xác thực auth không thành công
    //     //     // - không có quyền upload
    //     //     // - php không enable curl
    //     //     return [
    //     //         'status' => false,
    //     //         'url' => '',
    //     //         'message' => 'Upload fail! ' . $ex->getMessage(),
    //     //     ];
    //     // }
    // }

    //----------------------------------------------------------------------------

    private $postRepository;
    private $newsRepository;

    public function __construct(PostRepository $postRepo,NewsRepository $newsRepo)
    {
        $this->postRepository = $postRepo;
        $this->newsRepository = $newsRepo;
    }
    public function home(){
      $posts = $this->postRepository->getPostPublic();

      $news = $this->newsRepository->getNewsHome();

      return view('LaravelView.PublicView.home',[
        'posts'     =>$posts,
        'news'      =>$news
      ]);
    }

}
