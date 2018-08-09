<?php

namespace App\Repositories\Categories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Posts\Post;

class Category extends Model
{
    protected $fillable = ['title'];

    public function post(){
    	return $this->hasMany('Post');
    }
}
