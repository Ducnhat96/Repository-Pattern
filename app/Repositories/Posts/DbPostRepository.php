<?php 

namespace App\Repositories\Posts;
use App\Repositories\BaseRepository;
class DbPostRepository extends BaseRepository implements PostRepositoryInterface {

	public function __construct(Post $post){
		parent::__construct($post);
	}

}