@extends('layouts.master')


@section('content')

<div class="col-sm-8">
	<hr>

	<h1>
		registar
	</h1>

	<hr>
	<form method="post" action="/register">
		{{csrf_field()}}

		<div>
			<label for="name">Name:</label>
			<input type="text" class="form-controller" name="name">
		</div>

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
			<label for="password_Confirmation">Password Confirmation</label>
			<input type="password" class="form-controller" name="password_Confirmation">
		</div>  
<hr>
		 <div>
			<button type="submit" class="btn btn-primary">
				register
			</button>
<hr>

       <div>
       	@include('layouts.errors')
       </div>


		</div>   
	</form>
</div>
@endsection