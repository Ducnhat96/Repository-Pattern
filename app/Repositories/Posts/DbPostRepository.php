<?php 

namespace App\Repositories\Posts;
use App\Repositories\BaseRepository;
class DbPostRepository extends BaseRepository implements PostRepositoryInterface {

	protected $model;
	public function __construct(Post $post){
		$this->model = $post;
		//parent::__construct($post);
	}
	public function getAddTitleCategory(){
		return $this->model->with('category')->get();
	}

}