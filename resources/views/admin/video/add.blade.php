@extends('layouts.master')

@section('main-content')

<div class="breadcrumb">
	<h1>Upload New Video</h1>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="row justify-content-center">
	<div class="col-md-4">
		<fieldset>
			<form action="{{ route('storeVideo') }}" method="POST" enctype="multipart/form-data">
				@csrf
	
				<div class="form-group">
					<label for="video_title">Title*</label>

					<input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="video_title" value="{{ old('title') }}">

					@error('title')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="video_description">Description*</label>

					<textarea class="form-control @error('description') is-invalid @enderror" name="description" id="video_description" rows="4">{{ old('description') }}</textarea>

					@error('description')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="video_category">Video Category*</label>

					<select class="select_category @error('category') is-invalid @enderror" name="category" id="video_category">
						<option></option>
					</select>

					@error('category')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="video_source_name">Video Source*</label>

					<select class="form-control select_video_source @error('video_source_name') is-invalid @enderror" name="video_source_name" id="video_source_name">
						<option value="youtube" {{ old('video_source_name') === 'youtube' ? 'selected' : '' }}>Youtube</option>
						<option value="vimeo" {{ old('video_source_name') === 'vimeo' ? 'selected' : '' }}>Vimeo</option>
						<option value="direct_upload" {{ old('video_source_name') === 'direct_upload' ? 'selected' : '' }}>Direct Upload</option>
					</select>

					@error('video_source_name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group source_field">
					<label for="youtube">Youtube ID*</label>

					<input type="text" name="video_source" class="form-control @error('video_source') is-invalid @enderror" id="youtube" value="{{ old('video_source') }}">

					@error('video_source')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group d-none source_field mb-3">
					<label for="vimeo">Vimeo ID*</label>

					<input type="text" name="video_source" class="form-control @error('video_source') is-invalid @enderror" id="vimeo" disabled="disabled" value="{{ old('video_source') }}">

					@error('video_source')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group d-none source_field">
					<input type="file" class="custom-file-input @error('video_source') is-invalid @enderror" id="direct_upload" name="video_source" disabled="disabled">

					<label class="custom-file-label" for="direct_upload">Choose file</label>

					@error('video_source')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary ripple m-1">Submit</button>
					<a href="{{ route('videoDashboard') }}" class="btn btn-dark">Cancel</a>
				</div>
			</form>
		</fieldset>
	</div>
</div>

@endsection

@section('page-js')
@endsection

@section('bottom-js')

{{-- ckeditor script --}}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'video_description' );
    </script>
<script>

$(document).ready(function() {
	var all_categories = @json($allCategories);

	$('.select_category').select2({
		width: '100%',
		placeholder: 'Select Category',
		cache: true,
		minimumInputLength: 0,
		data: $.map(all_categories, function (obj) {
			return {
				text: obj.name,
				id: obj.id
			}
		})
	});

	$(".select_video_source").on('change', function() {
		$(".source_field").each(function() {
			if ($(this).hasClass('d-none')) {
				$(".source_field").addClass('d-none');
				$(".source_field input").attr('disabled', true);
			}
		})

		var targeted_div = $(this).val();
		$("#" + targeted_div).closest('.form-group').removeClass('d-none');
		$("#" + targeted_div).removeAttr('disabled');
	});
});

</script>

@endsection