@extends('layouts.app')

@section('page_title',  'Cricket Assignment - Players')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
					<a href="{{ url('/home')}}"><h3>Cricket Assignment 2020</h3></a>
					<strong>All Players</strong>
				</div>

                <div class="card-body">
					<!--<h4>All Teams</h4>-->
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>Players</li>
					</ul>
					
                    <div class="table-responsive">
					<table class="table table-bordered table-striped table-hover ">
						<thead>
							<tr>
								<th width="10">S.No.</th>
								<th>
									{{ trans('global.player_image') }}
								</th>
								<th>
									{{ trans('global.player_name') }}
								</th>
								<th>
									{{ trans('global.jersey_number') }}
								</th>
								<th>
									{{ trans('global.country') }}
								</th>
								<th>
									{{ trans('global.team_name') }}
								</th>
								<th>
									{{ trans('global.status') }}
								</th>       
								<th width="160" align="center">
									{{ trans('global.actions') }}
								</th>
							</tr>
						</thead>
						<tbody>
						@php
							$pageno = (request()->get('page') > 0) ? request()->get('page') : 1;
							$counter = ($pageno-1) * config('custom.page_limit')+1; 
						@endphp							
						@if(count($players) > 0)
							@foreach($players as $key => $player)
								<tr data-entry-id="{{ $player->id }}">
								   <td>
										{{ $counter }}
									</td>
									<td><a href="{{ route('players.show', $player->id) }}">
										<div class="img-box">
											@if($player->image_uri != '' && file_exists(public_path('/uploads/players/profile/'. $player->image_uri))) 											
												<img src="{{ asset('/uploads/players/profile/'. $player->image_uri) }}" width="75" class="imgclass" />
											@else 
												<img src="{{ asset('/uploads/players/profile/default_profile.png') }}" width="75" class="imgclass" />
											@endif
										</div>
									</td></a>
									<td>
										@if($player->last_name)
											<h5>{{ $player->last_name ." ". $player->first_name }}</h5>
										@else
											<h5>{{ $player->first_name }}</h5>
										@endif
									</td>  									
									<td>
										{{ $player->jersey_number ?? '' }}
									</td>
									<td>
										@if($player->country_id !== NULL) 
											{{ $player->country->country_name. "(" .$player->country->country_code. ")" }} 
										@else 
											{{ 'N/A' }} 
										@endif
									</td>
									<td>
										{{ $player->team->name ?? '' }}
									</td>
									<td>
										@if($player->status === '1')
											<span class="text-success">Active</span> 
										@else 
											<span class="text-danger">Inactive</span> 
										@endif
									</td>                                                     
									<td align="center">
										<a class="btn btn-xs btn-primary" href="{{ route('players.show', $player->id) }}">
											<i class="fa fa-eye-slash" aria-hidden="true"></i>
										</a>

										<a class="btn btn-xs btn-info" href="{{ route('players.edit', $player->id) }}">
											<i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#fff;"></i>
										</a>

										<form action="{{ route('players.destroy', $player->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
											<input type="hidden" name="_method" value="DELETE">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											
											<button type="submit" class="btn btn-xs btn-danger">
												<i class="fa fa-remove" aria-hidden="true"></i>
											</button>
										</form>
									</td>
								</tr>
								@php $counter++; @endphp
							@endforeach  
						@else
							<tr>
								<td colspan="8"> {{ trans('global.no_record') }} </td>
							</tr>
						@endif
						</tbody>
					</table><br />

					@if(count($players) > 0)
					{{ $players->links() }}
					@endif			
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
