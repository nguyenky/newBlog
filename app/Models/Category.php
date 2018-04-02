<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    public function news(){
      return $this->hasMany(\App\Models\News::class);
    }
}
