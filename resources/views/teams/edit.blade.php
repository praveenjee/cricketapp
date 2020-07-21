@extends('layouts.app')

@section('page_title',  'Cricket Assignment - Team Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
					<a href="{{ url('/home')}}"><h3>Cricket Assignment 2020</h3></a>
					<strong>Edit Team Details</strong>
				</div>

                <div class="card-body">
					<!--<h4>All Teams</h4>-->
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li><a href="{{ url('/teams') }}">Team</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>Edit Team</li>
					</ul>
					
					<form action="{{ route('teams.update', [$team->id]) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')

						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="name">Team Name*</label>
								</div>
								<div class="col-md-9">
									<input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($team) ? $team->name : '') }}" />									
									
									@if($errors->has('name'))
										<em class="invalid-feedback">
											{{ $errors->first('name') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div> 
						
						<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="slug">Slug*</label>
								</div>
								<div class="col-md-9">
									<input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', isset($team) ? $team->slug : '') }}" />									
									
									@if($errors->has('slug'))
										<em class="invalid-feedback">
											{{ $errors->first('slug') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div>						

						<div class="form-group {{ $errors->has('logo_uri') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="logo_uri">Logo* </label>
								</div>
								<div class="col-md-9">
								   <input type="file" id="logo_uri" name="logo_uri" style="margin-bottom:5px;" /><br/>
									@if($team->logo_uri != '' && file_exists(public_path('/uploads/team/logo/'. $team->logo_uri))) 
										<div class="img-box">
											<img src="{{ asset('/uploads/team/logo/'. $team->logo_uri) }}" width="75" class="imgclass" />
										</div>
									@endif 
									@if($errors->has('logo_uri'))
										<em class="invalid-feedback">
											{{ $errors->first('logo_uri') }}
										</em>
									@endif 								   
								</div>
							</div>
						</div>

						<div class="form-group {{ $errors->has('history') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="history">History</label>
								</div>
								<div class="col-md-9">
									<textarea id="history" name="history" class="form-control ckeditor" >
									{!! $team->history !!}</textarea>

									@if($errors->has('history'))
										<em class="invalid-feedback">
											{{ $errors->first('history') }}
										</em>
									@endif									
								</div>
							</div>
						</div>
						
						<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="history">Description</label>
								</div>
								<div class="col-md-9">
									<textarea id="description" name="description" class="form-control" >
									{!! $team->description !!}</textarea>

									@if($errors->has('description'))
										<em class="invalid-feedback">
											{{ $errors->first('description') }}
										</em>
									@endif									
								</div>
							</div>
						</div>
						
						<div class="form-group {{ $errors->has('club_state') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="club_state">club_state*</label>
								</div>
								<div class="col-md-9">
									<input type="text" id="club_state" name="club_state" class="form-control" value="{{ old('club_state', isset($team) ? $team->club_state : '') }}" />									
									
									@if($errors->has('club_state'))
										<em class="invalid-feedback">
											{{ $errors->first('club_state') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div>	
						
						<div class="form-group {{ $errors->has('meta_title') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="meta_title">Meta Title</label>
								</div>
								<div class="col-md-9">
									<input type="text" id="meta_title" name="meta_title" class="form-control" value="{{ old('meta_title', isset($team) ? $team->meta_title : '') }}" />									
									
									@if($errors->has('meta_title'))
										<em class="invalid-feedback">
											{{ $errors->first('meta_title') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div>
						
						<div class="form-group {{ $errors->has('meta_keywords') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="meta_keywords">Meta Keywords</label>
								</div>
								<div class="col-md-9">
									<input type="text" id="meta_keywords" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', isset($team) ? $team->meta_keywords : '') }}" />									
									
									@if($errors->has('meta_keywords'))
										<em class="invalid-feedback">
											{{ $errors->first('meta_keywords') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div>	
						
						<div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="meta_description">Meta Description</label>
								</div>
								<div class="col-md-9">
									<input type="text" id="meta_description" name="meta_description" class="form-control" value="{{ old('meta_description', isset($team) ? $team->meta_description : '') }}" />
									
									@if($errors->has('meta_description'))
										<em class="invalid-feedback">
											{{ $errors->first('meta_description') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div>		
						
						<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="status">Status</label>
								</div>
								<div class="col-md-9">
									<label class="radio-inline"><input type="radio" name="status" value='1' {{ $team->status == '1' ? 'checked' :'' }}> Active</label>
									<label class="radio-inline"><input type="radio" name="status" value='0' {{ $team->status == '0' ? 'checked' :'' }}> Inactive</label>
									@if($errors->has('status'))
										<em class="invalid-feedback">
											{{ $errors->first('status') }}
										</em>
									@endif 								   
								</div>
							</div>
						</div> 
						
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-9">
								<input class="btn btn-primary" type="submit" value="{{ trans('global.submit') }}">
								<a class="btn btn-default" href="{{route('teams.index')}}">{{ trans('global.cancel') }}</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		<div class="col-md-3">
			 <div class="card">
                <div class="card-header">
					<h3>Important Links</h3>
				</div>	
				<div class="card-body">
					@include('rightbar')
				</div>
			 </div>
		</div>
    </div>
</div>
@endsection

@section('script')
	@parent	
    
@endsection
