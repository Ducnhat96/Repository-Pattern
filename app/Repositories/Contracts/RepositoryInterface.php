<?php 
namespace App\Repositories\Contracts;
use Illuminate\Http\Request;
interface RepositoryInterface {

	public function all();

	public function find($id);

	public function create(Request $request);

	public function update($id,Request $request);

	public function delete($id);
}