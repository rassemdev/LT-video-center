@extends('layouts.master')

@section('before-css')

@endsection

@section('page-css')
@endsection

@section('main-content')

<div class="breadcrumb">
	<h1>Categories</h1>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="row">
	<div class="col-lg-10 offset-lg-1">
		<div class="card">
			<div class="card-body">
				@if(session('success'))
					<div class="alert alert-success text-center">
						{{ session('success') }}
					</div>
				@endif

				@if(session('error'))
					<div class="alert alert-danger text-center">
						{{ session('error') }}
					</div>
				@endif

				<div class="card-title">Categories</div>

				<div class="table-responsive">
					<table id="category_table" class="display nowrap table table-striped table-bordered" style="width:100%"></table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('page-js')
@endsection

@section('bottom-js')

<script>

$(document).ready(function() {
	var all_categories = @json($allCategories);

	$('#category_table').DataTable({
		data: all_categories,
		columns: [
			{
				title: 'Name',
				data: 'name',
				className: 'align-middle'
			},
			{
				title: 'Status',
				data: 'status',
				className: 'align-middle'
			},
			{
				title: '<a class="btn btn-primary btn-sm" href="' + baseURL + 'category/add">Add</a>',
				data: 'id',
				render: function(data) {
					return '<a class="btn btn-success btn-sm" href="' + baseURL + 'category/' + data + '/edit">Edit</a><form class="mt-1" method="post" action="' + baseURL + 'category/' + data + '/change_status"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-primary btn-sm" type="submit">Change Status</button></form>'
				}
			}
		]
	});
});

</script>

@endsection