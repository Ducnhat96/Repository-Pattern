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
    	$attributes = $request->all();
    	$this->postRepository->create($attributes);
    	return back()->with('status','Post created successfully !');
    }

    public function updatePost(PostRequest $request,$id){
    	$attributes = $request->all();
    	$post = $this->postRepository->update($id,$attributes);
    	return redirect()->back()->with('status','Post has been updated successfully !');
    }
    public function deletePost($id){
    	$this->postRepository->delete($id);
    	return back()->with(['status'=>'Deleted successfully']);
    }
}
