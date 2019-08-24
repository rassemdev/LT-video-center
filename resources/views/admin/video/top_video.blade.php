@extends('layouts.master')

@section('main-content')

<div class="breadcrumb">
	<h1>Top Video</h1>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="row justify-content-center">
	<div class="col-md-4">
		<fieldset>
			<div class="form-group">
				<label for="top-video">Select Video</label>
				<select class="form-control" id="top-videos">      
					<option></option>
				</select>
			</div>
				
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
					<p>{!! $video->description !!}</p>
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
		</fieldset>
	</div>
</div>

@section('bottom-js')

<script>

$(document).ready(function() {
	$('#top-videos').select2({
		placeholder: 'Search Videos',
		ajax: {
			url : baseURL + 'dashboard/get_videos',
			type: 'GET',
			delay: 250,
			processResults: function (data) {
				return {
					results:  $.map(data, function (obj) {
						return {
							text: obj.title,
							id: obj.id
						}
					})
				};
			},
			cache: true
		}
	});

	$('#top-videos').on('change', function() {

	})
});

</script>

@endsection

@endsection
