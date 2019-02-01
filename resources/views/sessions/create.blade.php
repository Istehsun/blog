@extends('layouts.master')


@section('content')

<div class="col-sm-8">
	<hr>

	<h1>
		Sign In
	</h1>

	<hr>
	<form method="POST" action="/login">

		{{csrf_field()}}

		<hr>

        <div>
			<label for="email">Email:</label>
			<input type="email" class="form-controller" name="email">
		</div>  

		<hr>

		 <div>
			<label for="password">Password:</label>
			<input type="password" class="form-controller" name="password">
		</div>        
<hr>
		 <div>
			<button type="submit" class="btn btn-primary">
				Signin 
			</button>
<hr>

       <div>
       	@include('layouts.errors')
       </div>


		</div>   
	</form>
</div>
@endsection