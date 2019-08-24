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
				      <option value="0">-- Select Videos --</option>
				    </select>
				 </div>

		</fieldset>
	</div>
</div>
<script>
	$(document).ready(function() {
    $('#top-videos').select2({
    	ajax:{
    		url:baseURL+'get_videos',
    		type:'post',
    		dataType:'json',
    		delay:250,
    		data:function(params) {
    			return{
    				searchTerm = params.term //search term
    			};
    		},
    		processResults:function(response) {
    			return{
    				results:response
    			};
    		},
    		catch:true
    	}
    });
});
</script>
@endsection
