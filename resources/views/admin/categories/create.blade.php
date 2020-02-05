@extends('layouts.app')

@section('content')
	@include('admin.includes.errors')
	
	<div class="card">
		<div class="card-header ">
			<h3 class="text-success">Create a new category</h3>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('category.store')}}">
				{{csrf_field()}}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">Store Category</button>
				</div>
			</div>
			</form>
		</div>
	</div>
@endsection