<?php

namespace App\Repositories;

use App\Models\News;
use App\Models\Category;
use InfyOm\Generator\Common\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Validator;
use RemoteImageUploader\Factory;
class NewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'picture',
        'preview',
        'detail',
        'category_id',
        'likes',
        'display',
        'note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return News::class;
    }
    public function getAllNews(){
        $news = News::orderBy('id','DESC')->select('id','name','picture','preview','detail','category_id','likes','created_at','updated_at')
                ->with(array('category'=>function($query){
                    $query->select('id','name');
                }))->get();
        foreach ($news as $key => $new) {
            // if($new->picture){
            //     $find =  Storage::disk('public')->exists($new->picture);
            //     if($find){
            //         $new['url'] = url('storage/app/public/'.$new->picture);
            //     }else{
            //         $new['url'] = url('storage/app/public/default-new.png');
            //     }
            // }else{
            //     $new['url'] = url('storage/app/public/default-new.png');
            // }
            $images = $new->images;
            if($images){
                foreach ($images as $keyImage => $image) {
                    $find =  Storage::disk('public')->exists($image->name);
                    if($find){
                        $image['url'] = url('storage/app/public/'.$image->name);
                    }else{
                        $image['url'] = url('storage/app/public/default.jpg');
                    }
                }
            }
        }
        return $news;
    }
    public function addNews(array $attributes){
        if($attributes['picture']){
            $result = Factory::create(config('uploadphoto.host'), config('uploadphoto.auth'))
                ->upload($attributes['picture']->path());
            $attributes['picture'] = $result;
        }else{
            $attributes['picture'] = url('storage/app/public/default-new.png');
        }

        $new = News::create($attributes);
        return $new;
    }
    public function update(array $attributes,$id){
        $news = News::find($id);
        if($attributes['file']){
            $result = Factory::create(config('uploadphoto.host'), config('uploadphoto.auth'))
                ->upload($attributes['file']->path());
            $attributes['picture'] = $result;
        }
        $news->update($attributes);
        return $news;
    }
    // --------PUBLIC---------
    public function getNewsPublic(){
        $cats = Category::where('id','<=',7)->get();
        $arrayNews = [];
        foreach ($cats as $key => $cat) {
            if($cat->getLatest()){
                $new = $cat->getLatest();
                $new['comments'] = $new->comments()->select('id')->count();
                $arrayCat = $new->toArray();
                array_push($arrayNews,$arrayCat);
            }

        }
        return $arrayNews;
        // dd($array);
        // dd($news->toArray());
    }
    public function getNewsHome(){
        $categories = Category::select('id','name')->where('id','<=',61)->get();
        foreach ($categories as $key => $value) {
            $categories[$key]->new = $value->getLatest()->toArray();
        }
        return $categories->toArray();
    }
    public function getNewsSite($id){
        $news = News::orderBy('id','DESC')->where('category_id',$id)->paginate(1);

        return $news;
    }
}
