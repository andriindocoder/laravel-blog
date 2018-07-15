<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use Carbon\Carbon;

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

    public function category(Category $category){
        $categoryName = $category->title;

        // $posts = Post::with('author')
        //         ->latestFirst()
        //         ->published()
        //         ->where('category_id', $id)
        //         ->paginate($this->limit);
        $posts = $category->posts()
                    ->with('author')
                    ->latestFirst()
                    ->published()
                    ->paginate($this->limit);
                    
                
        return view("blog.index", compact('posts','categoryName'));
    }

    public function show(Post $post){

    	return view('blog.show', compact('post'));
    }
}
