<?php

namespace App\Http\Controllers;

use App\Post;
use App\comment;

class commentscontroller extends Controller
{
    
   public function store(Post $post)

   {

    comment::create([
                
                'body'    => request('body'),
                'post_id' => $post->id

    ]);

      return back();
   }

}
  