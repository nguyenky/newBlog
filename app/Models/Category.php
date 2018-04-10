<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;
class Category extends Model
{
    public $table = 'categories';

    public function news(){
       return $this->hasMany(\App\Models\News::class);
   }
   
    public function getLatest(){
      $newLatest = News::select('id','name','picture','preview','likes','created_at','detail')->with('comments')->where('category_id',$this->id)->latest()->first();

      return $newLatest;
    }
}
