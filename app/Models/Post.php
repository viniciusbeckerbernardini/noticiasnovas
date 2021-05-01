<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'draft',
        'slug',
        'content',
        'post_date',
        'author',
        'background_image'
    ];

    public function author(){
        return $this->hasOne(User::class,'id','author');
    }

    public function categories(){
        return $this->hasMany(Category::class,'id');
    }

}

