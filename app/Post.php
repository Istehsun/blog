<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Post extends Model
{

   protected $fillable =['user_id','title','body'];

   public function comments()
   {
        
        return $this->hasMany(comment::class);

   }

   public function user()
   
   {
        
        return $this->belongsTo(User::class);

   }

   public function addComment($body){

/*
     comment::create([
                
                'body'    => request('body'),
                'post_id' => $this->id

    ]);*/

   //passing id to post_id by relation
    

    $this->comments()->create(compact('body'));
   }
  
}
