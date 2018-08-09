<?php

namespace App\Repositories\Posts;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Categories\Category;

class Post extends Model
{
    protected $fillable = ['title', 'content','category_id'];
	
	public function category(){
    	return $this->belongsTo(Category::class,'category_id','id');
    }
}
