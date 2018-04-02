<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
  public $table = 'cats';


  protected $dates = ['deleted_at'];


  public $fillable = [
      'name',
      'category_id',
  ];
}
