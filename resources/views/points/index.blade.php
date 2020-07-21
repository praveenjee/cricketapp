@extends('layouts.app')

@section('page_title',  'Cricket Assignment - Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
					<a href="{{ url('/home')}}"><h3>Cricket Assignment 2020</h3></a>
					<strong>All Team Points</strong>
				</div>

                <div class="card-body">
					<!--<h4>All Teams</h4>-->
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li><a href="{{ url('/teams') }}">Team</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>Points</li>
					</ul>
					
                    <div class="table-responsive">
					<table class="table table-bordered table-striped table-hover ">
						<thead>
							<tr>
								<th width="10">S.No.</th>
								<th>
									{{ trans('global.team_image') }}
								</th>
								<th>
									{{ trans('global.team_name') }}
								</th>
								<th>
									{{ 'Total Points' }}
								</th>
							</tr>
						</thead>
						<tbody>
						@php
							$pageno = (request()->get('page') > 0) ? request()->get('page') : 1;
							$counter = ($pageno-1) * config('custom.page_limit')+1; 
						@endphp						
						@if(count($teams) > 0)
							@foreach($teams as $key => $team)
								<tr data-entry-id="{{ $team->id }}">
								   <td>
										{{ $counter }}
									</td>
									<td><a href="{{ route('teams.show', $team->id) }}">
										<div class="img-box">
											@if($team->logo_uri != '' && file_exists(public_path('/uploads/team/logo/'. $team->logo_uri))) 											
												<img src="{{ asset('/uploads/team/logo/'. $team->logo_uri) }}" width="75" class="imgclass" />
											@else 
												<img src="{{ asset('/uploads/team/logo/default_logo.png') }}" width="75" class="imgclass" />
											@endif
										</div>
									</td></a>
									<td>
										<a href="{{ route('teams.show', $team->id) }}"><h4>
											{{ $team->name ?? '' }}
										</h4></a>
									</td> 
									<td align="center">
										<h2>{{ isset($pointArray[$team->id]) ? $pointArray[$team->id] : 0 }}</h2>
									</td>
								</tr>
								@php $counter++; @endphp
							@endforeach  
						@else
							<tr>
								<td colspan="6" class="text-center"> {{ trans('global.no_record') }} </td>
							</tr>
						@endif
						</tbody>
					</table><br />

					@if(count($teams) > 0)
					{{ $teams->links() }}
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
