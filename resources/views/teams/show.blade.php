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
						<li><a href="{{ url('/teams') }}">Team</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>{{ $team->name}}</li>
					</ul>
					
                    <div class="table-responsive">
						<table class="table table-bordered ">
							<tr>
								<td colspan="1">
									<div class="img-box">
										@if($team->logo_uri != '' && file_exists(public_path('/uploads/team/logo/'. $team->logo_uri))) 											
											<img src="{{ asset('/uploads/team/logo/'. $team->logo_uri) }}" width="75" class="imgclass" alt="Team Logo" />
										@else 
											<img src="{{ asset('/uploads/team/logo/default_logo.png') }}" width="75" class="imgclass" alt="Team Logo" />
										@endif
									</div>
								</td>
								<td colspan="5" align="center">
									<h1>{{ $team->name}}</h1>
									<span>{{ $team->club_state }}</span>
								</td>
							</tr>
								<tr>
									<th width="10">S.No.</th>
									<th>
										{{ trans('global.player_image') }}
									</th>
									<th colspan="3">
										{{ 'Player Details' }}
									</th>	
								</tr>
							<tbody>
							@if(count($players) > 0)
								@foreach($players as $key => $player)
									<tr data-entry-id="{{ $player->id }}">
									   <td>
											{{ $key + 1 }}.
										</td>
										<td>
											<div class="img-box">
												@if($player->image_uri != '' && file_exists(public_path('/uploads/players/profile/'. $player->image_uri))) 											
													<img src="{{ asset('/uploads/players/profile/'. $player->image_uri) }}" width="75" class="imgclass" alt="Player Profile Logo" />
												@else 
													<img src="{{ asset('/uploads/players/profile/default_profile.png') }}" width="75" class="imgclass" alt="Player Profile Logo" />
												@endif
											</div>
										</td> 
										<td colspan="3">
											<a href="{{ route('players.show', $player->id) }}"><h4>
												{{ (isset($player->last_name)) ? $player->first_name ." ". $player->last_name : $player->first_name }}
											</h4></a>
										
											<br>
											{!! $player->country->country_name."(".$player->country->country_code.")" ?? '' !!}
											
											<br >
											@if($player->status === '1')
												<span class="text-success">Active</span> 
											@else 
												<span class="text-danger">Inactive</span> 
											@endif
											
											<br>
											{!! $player->history ?? '' !!}
											
									</tr>
								@endforeach  
							@else
								<tr>
									<td colspan="5" align="center">
										{{ trans('global.no_record') }}
									</td>
								</tr>
							@endif
							</tbody>
						</table><br />

						@if(count($players) > 0)
						{{ $players->links() }}
						@endif	
						
						<a href="{{ url('/teams') }}" class="btn btn-primary">Back</a>							
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
