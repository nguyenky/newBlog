<?php

namespace App\Repositories;

use App\Models\News;
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
                $find =  Storage::disk('public')->exists('/news/'.$new->picture);
                if($find){
                    $new['url'] = url('storage/app/public/news/'.$new->picture);
                }else{
                    $new['url'] = url('storage/app/public/default/default.jpg');
                }
            }else{
                $new['url'] = url('storage/app/public/default/default.jpg');
            }
        }
        return $news;
    }
    public function addNews(array $attributes){
        if($attributes['picture']){
           $ext        = $attributes['picture']->guessClientExtension();
            $reName     = time().'.'.$ext;
            $img = Image::make($attributes['picture'])->resize(340, 200);
            $img->save('storage/app/public/news/'.$reName);
            $attributes['picture'] = $reName;
            $url = url('storage/app/public/news/'.$reName); 
        }else{
            $url = url('storage/app/public/default/default.jpg');
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
            $img = Image::make($attributes['file'])->resize(340, 200);
            $img->save('storage/app/public/news/'.$reName);
            $attributes['picture'] = $reName;
            $url = url('storage/app/public/news/'.$reName);
            unlink('storage/app/public/news/'.$news->picture ); 
        }else{
            $url = url('storage/app/public/news/'.$news->picture);
        }

        $news->update($attributes);
        $news->url = $url;
        return $news;
    }
}