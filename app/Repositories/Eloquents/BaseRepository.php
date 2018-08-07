<?php 
namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquents\Model;
use Illuminate\Container\Container as App;

abstract class BaseRepository implements RepositoryInterface {
	private $app;

	protected $model;

	public function __construct(App $app){
		$this->app = $app;
		$this->makeModel();
	}

	abstract function model();

	public function all(){
		return $this->model->get();
	}

	public function find($id){
		return $this->model->find($id);
	}

	public function create(array $attributes){
		return $this->model->create($attributes);
	}

	public function update($id,array $attributes){
		return $this->model->find($id)->update($attributes);
	}

	public function delete($id){
		return $this->model->find($id)->delete();
	}

	public function makeModel(){
		$model = $this->app->make($this->model());
		return $this->model = $model->newQuery();
	}

}
