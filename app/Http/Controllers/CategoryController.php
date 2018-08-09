<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(PostRepositoryInterface $categoryRepository){
    	$this->categoryRepository = $categoryRepository;
    }

}
