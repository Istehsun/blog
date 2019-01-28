<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index() {

    	$posts = Post::all();

             return view('post.index',compact('posts'));
	}

    public function show(Post $post) {
         
         return view('post.show',compact('post'));

    }


	public function create() {

             return view('post.create');
	}
    //

    public function store() {

            $this->validate(request(),[

            	'title' => 'required',
            	'body'  => 'required'

            ]);
   
   /*Post::create(request()->all());*/
     Post::create(request(['title','body']));
        return redirect('/');
	}
}
