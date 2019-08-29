@extends('layouts.master')

@section('main-content')

<div class="breadcrumb">
	<h1>Top Video</h1>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="row justify-content-center mb-5">
	<div class="col-md-4">
		<fieldset>
			<div class="form-group">
				<label for="top-video">Select Video</label>
				<select class="form-control" id="top-videos">      
					<option></option>
				</select>
			</div>
		</fieldset>
	</div>
</div>

<div class="row iframe_row_wrapper">
	@if ($topVideos->isNotEmpty())
	@foreach ($topVideos as $video)
		<div class="col-md-3">
			<div class="card mb-4 o-hidden iframe_wrapper">
				@if ($video->video->video_source_name === 'youtube')
				<iframe id="existing-iframe-example"
						width="100%" height="250"
						src="https://www.youtube.com/embed/{{ $video->video->video_source }}?enablejsapi=1"
						frameborder="0"
						style="border: solid 4px #37474F"
				></iframe>

				@elseif ($video->video->video_source_name === 'vimeo')
				<iframe src="https://player.vimeo.com/video/{{ $video->video->video_source }}" width="100%" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

				@elseif ($video->video->video_source_name === 'direct_upload')
				<video width="100%" height="250" controls>
					<source src="{{ asset('videos/'.$video->video->video_source) }}">
				</video>
				@endif

				<div class="card-body">
					<p>{{ $video->video->title }}</p>
					<p>{!! $video->video->description !!}</p>
					<p><b>Category: </b>{{ $video->video->category->name }}</p>
				</div>

				<div class="form-group d-flex justify-content-center">
						<button class="btn btn-danger">Remove</button>
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
		var videoId = $(this).val();

		$.ajax({
			type: 'get',
			url: baseURL + 'dashboard/video_details/' + videoId,
		}).done(function(response) {
console.log(response);
			if (response.status == 'success') {
				if (response.data.video_source_name === 'youtube') {
					$(".iframe_row_wrapper").append('<div class="col-md-3">\
						<div class="card mb-4 o-hidden iframe_wrapper">\
							<iframe id="existing-iframe-example"\
								width="100%" height="250"\
								src="https://www.youtube.com/embed/' + response.data.video_source + '?enablejsapi=1"\
								frameborder="0"\
								style="border: solid 4px #37474F"\
							></iframe>\
							<div class="card-body">\
								<p>' + response.data.title + '</p>\
								<p>' + response.data.description + '</p>\
								<p><b>Category: </b>' + response.data.category.name + '</p>\
							</div>\
						</div>\
					</div>');

				} else if (response.data.video_source_name === 'vimeo') {
					$(".iframe_row_wrapper").append('<div class="col-md-3">\
						<div class="card mb-4 o-hidden iframe_wrapper">\
							<iframe src="https://player.vimeo.com/video/' + response.data.video_source + '" width="100%" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>\
							<div class="card-body">\
								<p>' + response.data.title + '</p>\
								<p>' + response.data.description + '</p>\
								<p><b>Category: </b>' + response.data.category.name + '</p>\
							</div>\
						</div>\
					</div>');

				} else {
					$(".iframe_row_wrapper").append('<div class="col-md-3">\
						<div class="card mb-4 o-hidden iframe_wrapper">\
							<video width="100%" height="250" controls>\
								<source src="' + baseURL + 'videos/' + response.data.video_source + '">\
							</video>\
							<div class="card-body">\
								<p>' + response.data.title + '</p>\
								<p>' + response.data.description + '</p>\
								<p><b>Category: </b>' + response.data.category.name + '</p>\
							</div>\
						</div>\
					</div>');
				}
			} 
		});
	})
});

</script>

@endsection

@endsection
