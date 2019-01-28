<?php

namespace App;



class comment extends Model
{

   protected $fillable = ['body', 'user_id'];

   public function post()
   
   {
        
        return $this->belongsTo(Post::class);

   }
}
