<?php 

namespace App\Repositories;

interface RepositoryInterface
{
   public function index();

	public function show($id);

	public function store(array $attributes);

	public function update($id,array $attributes);

	public function destroy($id);

}