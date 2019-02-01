@extends('layouts.master')


@section ('content')

<hr>

<h1>{{ $post->title }} </h1>

{{ $post->body }}

<hr>


<div class="comments">


   <ul class="list-group"> <h1>Comments</h1>
   	<hr>



	@foreach($post->comments as $comment)

   

    <li class="list-group-item">
    	
     {{$comment->body}}

    </li>

	@endforeach
	</ul>

</div>

<div class="card">
	<div class="card-block">
		<form method="POST" action="/posts/{{ $post->id }}/comments">

			{{csrf_field()}}

			<div  class="form-group">
                
				<textarea name="body" id="body" placeholder="add comment" class="form-control">
					
				</textarea>
			</div>

			<div  class="form-group">
				 
				 <button type="submit" class="btn btn-primary"> Add Comment </button>

			</div>
		</form>

		@include('layouts.errors')
	</div>
</div>
@endsection