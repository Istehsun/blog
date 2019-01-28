@extends('layouts.master')

@section('content')

<hr>
<h1>Publish A Post</h1>

<form method="Post" action="/posts">
   
   {{csrf_field()}}

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    
 
 
    <div class="form-group">
		 <label for="body">Body</label>
		 <textarea  id="body" name="body" class="form-control">
	
    </textarea>
  </div>
 <hr>
  
  <button type="submit" class="btn btn-primary">Publish</button>

  @include('layouts.errors')

</form>

  

@endsection