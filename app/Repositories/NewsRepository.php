<?php

namespace App\Repositories;

use App\Models\News;
use App\Models\Category;
use InfyOm\Generator\Common\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
        $news = News::orderBy('id','DESC')->select('id','name','picture','preview','detail','category_id','likes','display','note','created_at','updated_at')
                ->with(array('category'=>function($query){
                    $query->select('id','name');
                }))->get();
        foreach ($news as $key => $new) {
            if($new->picture){
                $find =  Storage::disk('public')->exists($new->picture);
                if($find){
                    $new['url'] = url('storage/app/public/'.$new->picture);
                }else{
                    $new['url'] = url('storage/app/public/default.jpg');
                }
            }else{
                $new['url'] = url('storage/app/public/default.jpg');
            }
        }
        return $news;
    }
    public function addNews(array $attributes){
        if($attributes['picture']){
           $ext        = $attributes['picture']->guessClientExtension();
            $reName     = time().'.'.$ext;
            $img = Image::make($attributes['picture'])->resize(870, 500);
            $img->save('storage/app/public/'.$reName);
            $attributes['picture'] = $reName;
            $url = url('storage/app/public/'.$reName); 
        }else{
            $url = url('storage/app/public/default.jpg');
        }

        $new = News::create($attributes);
        $new->url = $url;
        return $new;
    }
    public function update(array $attributes,$id){
        // if($attributes['likes']){
        //     $attributes['likes'] = (int)$attributes['likes'];
        //     $attributes['display'] = null;
        // }
        $news = News::find($id);
        if($attributes['file']){
            $ext        = $attributes['file']->guessClientExtension();
            $reName     = time().'.'.$ext;
            $img = Image::make($attributes['file'])->resize(870, 500);
            $img->save('storage/app/public/'.$reName);
            $attributes['picture'] = $reName;
            $url = url('storage/app/public/'.$reName);
            $find =  Storage::disk('public')->exists($news->picture);
            if($find){
                unlink('storage/app/public/'.$news->picture ); 
            }
        }else{
            $url = url('storage/app/public/'.$news->picture);
        }

        $news->update($attributes);
        $news->url = $url;
        return $news;
    }
    // --------PUBLIC---------
    public function getNewsPublic(){
        $cats = Category::where('id','<=',6)->get();
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
}