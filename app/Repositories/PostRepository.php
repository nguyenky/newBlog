<?php

namespace App\Repositories;

use App\Models\Post;
use InfyOm\Generator\Common\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Validator;
use RemoteImageUploader\Factory;
class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'caption',
        'note',
        'picture'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }
    public function all($columns = ['*']){
        $posts = Post::orderBy('id','DESC')->paginate(12);
        // foreach ($posts as $key => $post) {
        //     $find =  Storage::disk('public')->exists($post->picture);
        //     if($find){
        //         $post['url'] = url('storage/app/public/'.$post->picture);
        //     }else{
        //         $post['url'] = url('storage/app/public/default.jpg');
        //     }
        // }
        return $posts;
    }
    public function create(array $attributes){
        $result = Factory::create(config('uploadphoto.host'), config('uploadphoto.auth'))
                ->upload($attributes['picture']->path());
        $post = Post::create([
            'caption'=>$attributes['caption'],
            'picture'=>$result
            ]);
        return $post;
    }
    public function getPostPublic(){
        $posts = Post::orderBy('id','DESC')->limit(4)->get();
        // foreach ($posts as $key => $post) {
        //     $find =  Storage::disk('public')->exists($post->picture);
        //     if($find){
        //         $post['url'] = url('storage/app/public/'.$post->picture);
        //     }else{
        //         $post['url'] = url('storage/app/public/default.jpg');
        //     }
        // }
        return $posts;
    }
}
