@extends('layouts.master')

@section('content')
	<h3>Register User</h3>
	<hr>
	<form action="/register" method="POST">
		{{ csrf_field() }}
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" id="name" >
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" >
		  </div>	
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" >
		  </div>
		  <div class="form-group">
		    <label for="password">Retype Password</label>
		    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		  @include('layouts.error')
	</form>
@endsection

