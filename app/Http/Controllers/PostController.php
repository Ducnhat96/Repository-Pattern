<?php

namespace App\Http\Controllers;
use App\Repositories\Contracts\RepositoryInterface;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
	protected $postRepository;

    public function __construct(RepositoryInterface $postRepository){
    	$this->postRepository = $postRepository;
    }

    public function getAllPost(){
    	$posts = $this->postRepository->all();
    	return view('index',compact('posts'));
    }

    public function findById($id){
    	$post = $this->postRepository->find($id);
    	return view('edit',compact('post'));
    }

    public function createPost(PostRequest $request){
    	$this->postRepository->create($request);
    	return back()->with('status','Post created successfully !');
    }

    public function updatePost(PostRequest $request,$id){
    	$post = $this->postRepository->update($id,$request);
    	return redirect()->back()->with('status','Post has been updated successfully !');
    }
    public function deletePost($id){
    	$this->postRepository->delete($id);
    	return back()->with(['status'=>'Deleted successfully']);
    }
}
