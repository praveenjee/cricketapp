@extends('layouts.app')

@section('page_title',  'Cricket Assignment - Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
					<a href="{{ url('/home')}}"><h3>Cricket Assignment 2020</h3></a>
					<strong>Team Information, {{ date('d M Y') }}</strong>
				</div>

                <div class="card-body">
					<!--<h4>All Teams</h4>-->
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li><a href="{{ url('/players') }}">Players</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>{{ $player->first_name . " ". $player->last_name}}</li>
					</ul>
					
                    <div class="table-responsive">
					<table class="table table-bordered ">
						<tbody>
							<tr>
								<th width="200">Profile Picture</th>
								<td>
									<div class="img-box">
										@if($player->image_uri != '' && file_exists(public_path('/uploads/players/profile/'. $player->image_uri))) 											
											<img src="{{ asset('/uploads/players/profile/'. $player->image_uri) }}" width="100" class="imgclass" />
										@else 
											<img src="{{ asset('/uploads/players/profile/default_profile.png') }}" width="100" class="imgclass" />
										@endif
									</div>
								</td>
							</tr>
							<tr>
								<th>{{ trans('global.player_name') }}</th>
								<td>
									@if($player->last_name)
										<h5>{{ $player->last_name ." ". $player->first_name }}</h5>
									@else
										<h5>{{ $player->first_name }}</h5>
									@endif
								</td>
							</tr>
							<tr>
								<th>Jersey Number</th>
								<td>
									{{ $player->jersey_number }}
								</td>
							</tr>
							<tr>
								<th>Country</th>
								<td>
									@if($player->country_id !== NULL) 
										{{ $player->country->country_name. "(" .$player->country->country_code. ")" }} 
									@else 
										{{ 'N/A' }} 
									@endif
								</td>
							</tr>							
							<tr>
								<th>Team</th>
								<td>
									{{ $player->team->name ?? '' }}
								</td>
							</tr>
							<tr>
								<th>Status</th>
								<td>
									@if($player->status === '1')
										<span class="text-success">Active</span> 
									@else 
										<span class="text-danger">Inactive</span> 
									@endif
								</td> 
							</tr>
							<tr>
								<th>History</th>
								<td>
									{!! $player->history !!}
								</td>
							</tr>
							<tr>
								<th>Description</th>
								<td>
									{!! $player->description !!}
								</td>
							</tr>
							<tr>
								<th>Meta Title</th>
								<td>
									{!! $player->meta_title !!}
								</td>
							</tr>
							<tr>
								<th>Meta Keywords</th>
								<td>
									{{ $player->meta_keywords }}
								</td>
							</tr>
							<tr>
								<th>Meta Description</th>
								<td>
									{{ $player->meta_description }}
								</td>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<td>
									<a href="{{ url('/players') }}" class="btn btn-primary">Back</a>
								</td>
							</tr>							
						</tbody>
					</table>
					</div>
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
