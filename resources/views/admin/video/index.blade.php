@extends('layouts.master')

@section('main-content')

@section('before-css')

<style>
	
.video_buttons {
	display: flex;
}

</style>

@endsection

<div class="breadcrumb justify-content-between">
	<h1>Videos</h1>
	<a href="{{ route('addVideo') }}" class="btn btn-success">Upload New Video</a>
</div>
<div class="separator-breadcrumb border-top"></div>

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

<!-- CARD ICON -->
<div class="row">
	@if ($allVideos->isNotEmpty())
	@foreach ($allVideos as $video)
		<div class="col-md-3">
			<div class="card mb-4 o-hidden iframe_wrapper">
				@if ($video->video_source_name === 'youtube')
				<iframe id="existing-iframe-example"
						width="100%" height="250"
						src="https://www.youtube.com/embed/{{ $video->video_source }}?enablejsapi=1"
						frameborder="0"
						style="border: solid 4px #37474F"
				></iframe>

				@elseif ($video->video_source_name === 'vimeo')
				<iframe src="https://player.vimeo.com/video/{{ $video->video_source }}" width="100%" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

				@elseif ($video->video_source_name === 'direct_upload')
				<video width="100%" height="250" controls>
					<source src="{{ asset('videos/'.$video->video_source) }}">
				</video>
				@endif

				<div class="card-body">
					<p>{{ $video->title }}</p>
					<p>{{ $video->description }}</p>
					<p><b>Category: </b>{{ $video->category->name }}</p>
				</div>

				<div class="form-group d-flex justify-content-center">
					<a href="{{ route('editVideo', ['id' => $video->id]) }}" class="btn btn-success mr-2">Edit</a>

					<form action="{{ route('deleteVideo', ['id' => $video->id]) }}" method="post">
						@csrf
						{{ method_field('delete') }}

						<button class="btn btn-danger">Remove</button>
					</form>
				</div>
			</div>
		</div>
	@endforeach
	@else
		<div class="col-md-12">
			<h1 class="text-center">No Video found!</h1>
		</div>
	@endif
</div>

@endsection

@section('page-js')

	<script src="https://player.vimeo.com/api/player.js"></script>

@endsection