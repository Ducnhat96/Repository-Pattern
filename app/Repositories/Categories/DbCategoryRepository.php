<?php 

namespace App\Repositories\Categories;
use App\Repositories\BaseRepository;
class DbCategoryRepository extends BaseRepository implements CategoryRepositoryInterface {

	protected $model
	public function __construct(Category $category){
		$this->model = $category;
		//parent::__construct($category);
	}


}