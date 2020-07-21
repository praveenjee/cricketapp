@extends('layouts.app')

@section('page_title',  'Cricket Assignment - Player Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
					<h3>Cricket Assignment 2020</h3>
					<strong>Edit Player Details</strong>
				</div>

                <div class="card-body">
					<!--<h4>All Teams</h4>-->
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li><a href="{{ url('/players') }}">Players</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>Edit Player</li>
					</ul>
					
					<form action="{{ route('players.update', [$player->id]) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')

						<div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="name">First Name*</label>
								</div>
								<div class="col-md-9">
									<input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', isset($player) ? $player->first_name :'') }}" />									
									
									@if($errors->has('first_name'))
										<em class="invalid-feedback">
											{{ $errors->first('first_name') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div> 

						<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="name">Last Name</label>
								</div>
								<div class="col-md-9">
									<input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', isset($player) ? $player->last_name :'') }}" />									
									
									@if($errors->has('last_name'))
										<em class="invalid-feedback">
											{{ $errors->first('last_name') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div> 
					
						<div class="form-group {{ $errors->has('image_uri') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="image_uri">Profile Image* </label>
								</div>
								<div class="col-md-9">
								   <input type="file" id="image_uri" name="image_uri" style="margin-bottom:5px;" />
								   	@if($player->image_uri != '' && file_exists(public_path('/uploads/players/profile/'. $player->image_uri))) 
										<div class="img-box">
											<img src="{{ asset('/uploads/players/profile/'. $player->image_uri) }}" width="75" class="imgclass" />
										</div>
									@endif 
									@if($errors->has('image_uri'))
										<em class="invalid-feedback">
											{{ $errors->first('image_uri') }}
										</em>
									@endif 								   
								</div>
							</div>
						</div>

						<div class="form-group {{ $errors->has('team_id') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="team_id">Team* </label>
								</div>
								<div class="col-md-9">
									<select id="team_id" name="team_id" class="form-control">
										<option value="">Select Team</option>
										@foreach($allteams as $key => $team)
										<option value="{{ $team->id }}" {{ $player->team_id == $team->id ? 'selected' :'' }}>{{ $team->name }}</option>
										@endforeach
									</select>
									
									@if($errors->has('team_id'))
										<em class="invalid-feedback">
											{{ $errors->first('team_id') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div> 

						<div class="form-group {{ $errors->has('jersey_number') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="name">Jersey Number* </label>
								</div>
								<div class="col-md-9">
									<input type="text" id="jersey_number" name="jersey_number" class="form-control" value="{{ old('jersey_number', isset($player) ? $player->jersey_number :'') }}" />									
									
									@if($errors->has('jersey_number'))
										<em class="invalid-feedback">
											{{ $errors->first('jersey_number') }}
										</em>
									@endif								  
								</div>
							 </div>
						</div> 
						
						<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
							<div class="row">
								<div class="col-md-3">
									<label for="team_id">Country </label>
								</div>
								<div class="col-md-9">
									<select id="country" name="country" class="form-control">
										<option value="">Select Country</option>
										@foreach($countries as $key => $country)
										<option value="{{ $country->id }}" {{ ($country->id == $player->country_id) ? 'selected' : '' }}>{{ $country->country_name ."(" .$country->country_code. ")" }}</option>
										@endforeach
									</select>
									
									@if($errors->has('country'))
										<em class="invalid-feedback">
											{{ $errors->first('country') }}
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
									{!! $player->history ?? '' !!}</textarea>

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
									<textarea id="description" name="description" class="form-control" >{!! $player->description ?? '' !!}</textarea>

									@if($errors->has('description'))
										<em class="invalid-feedback">
											{{ $errors->first('description') }}
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
									<input type="text" id="meta_title" name="meta_title" class="form-control" value="{{ old('meta_title', isset($player) ? $player->meta_title :'') }}" />									
									
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
									<input type="text" id="meta_keywords" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', isset($player) ? $player->meta_keywords :'') }}" />									
									
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
									<input type="text" id="meta_description" name="meta_description" class="form-control" value="{{ old('meta_description', isset($player) ? $player->meta_description :'') }}" />
									
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
									<label class="radio-inline"><input type="radio" name="status" value='1' {{ $player->status == '1' ? 'checked' :'' }}> Active</label>
									<label class="radio-inline"><input type="radio" name="status" value='0' {{ $player->status == '0' ? 'checked' :'' }}> Inactive</label>
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
								<input class="btn btn-primary" type="submit" value="{{ trans('global.save') }}">
								<a class="btn btn-default" href="{{route('players.index')}}">{{ trans('global.cancel') }}</a>
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
