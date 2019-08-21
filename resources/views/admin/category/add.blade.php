@extends('layouts.master')

@section('before-css')
@endsection

@section('main-content')

<div class="breadcrumb">
	<h1>Add Category</h1>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="row">
	<div class="col-lg-6 offset-lg-3">
		<div class="card">
			<div class="card-body">
				@if(session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
					</div>
				@endif

				<div class="card-title mb-3">Add Category</div>

				<form method="POST" action="{{ route('category.store') }}">
					@csrf

					<div class="form-group mb-3">
						<label for="name">Name</label>
						<input id="name" class="form-control @error('name') is-invalid @enderror" type="name" name="name" value="{{ old('name') }}">

						@error('name')
							<div class="invalid-feedback">
								Please choose a type
							</div>
						@enderror
					</div>
					<div class="form-group mb-3">
						<label for="status">Status</label>
						<select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
							<option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
							<option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
						</select>

						@error('status')
							<div class="invalid-feedback">
								Please choose a type
							</div>
						@enderror
					</div>


					<div class="form-group">
						 <button class="btn btn-primary" type="submit">Submit</button>
						 <a class="btn btn-danger" href="{{ route('category.index') }}">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('page-js')
@endsection

@section('bottom-js')
@endsection
