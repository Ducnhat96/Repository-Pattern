<?php
namespace App\Http\Controllers;
use App\Repositories\Posts\PostRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
	protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository){
    	$this->postRepository = $postRepository;
    }

    public function index(){
    	$posts = $this->postRepository->getAddTitleCategory();
    	return view('index',compact('posts'));
    }

    public function create(){

    }

    public function show($id){
    	$post = $this->postRepository->show($id);
    	return view('edit',compact('post'));
    }

    public function store(PostRequest $request){
    	$attributes = $request->all();
    	$this->postRepository->store($attributes);
    	return back()->with('status','Post created successfully !');
    }

    public function edit($id){

    }

    public function update(PostRequest $request,$id){
    	$attributes = $request->all();
    	$post = $this->postRepository->update($id,$attributes);
    	return redirect()->back()->with('status','Post has been updated successfully !');
    }

    public function destroy($id){
    	$this->postRepository->destroy($id);
    	return back()->with(['status'=>'Deleted successfully']);
    }
}
