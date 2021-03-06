<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface {

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function index(){
		return $this->model->all();
	}

	public function show($id){
		return $this->model->find($id);
	}

	public function store(array $attributes){
		return $this->model->create($attributes);
	}

	public function update($id,array $attributes){
		return $this->model->find($id)->update($attributes);
	}

	public function destroy($id){
		return $this->model->find($id)->delete();
	}

}