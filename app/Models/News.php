<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class News
 * @package App\Models
 * @version May 28, 2017, 1:36 pm UTC
 */
class News extends Model
{
    use SoftDeletes;

    public $table = 'news';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'picture' => 'string',
        'preview' => 'string',
        'detail' => 'string',
        'category_id' => 'integer',
        'likes' => 'integer',
        'display' => 'integer',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'preview' => 'required',
        'detail' => 'required',
        'category_id' => 'required'
    ];

    public function category(){
        return $this->belongsTo(\App\Models\Category::class);
    }
    public function images(){
        return $this->hasMany(\App\Models\Picture::class);
    }
    
}
