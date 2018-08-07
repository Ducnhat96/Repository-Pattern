<?php 
namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\RepositoryInterface;
use App\Post;
use Illuminate\Http\Request;

class PostRepository implements RepositoryInterface {

	protected $model;

	public function __construct(Post $model){
		$this->model = $model;
	}

	public function all(){
		return $this->model->all();
	}

	public function find($id){
		return $this->model->find($id);
	}

	public function create(Request $request){
		$attributes =$request->all();
		return $this->model->create($attributes);
	}

	public function update($id,Request $request){
		$attributes = $request->all();
		return $this->model->find($id)->update($attributes);
	}

	public function delete($id){
		return $this->model->find($id)->delete();
	}

}
