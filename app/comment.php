<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;
class comment extends Model
{

   protected $fillable = ['id','user_id','post_id','body'];

   public function post()
   
   {
        
        return $this->belongsTo(Post::class);

   }

   public function user()
   
   {
        
        return $this->belongsTo(User::class);

   }
}
