<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
	protected $limit = 5;

    public function index(){
    	$posts = Post::with('author')
    			->latestFirst()
    			->published()
    			->paginate($this->limit);
    			
    	return view("blog.index", compact('posts'));
    }

    public function show($id){
    	$post = Post::findOrFail($id);
    	return view('blog.show', compact('post'));
    }
}
