@extends('layouts.app')

@section('page_title',  'Cricket Assignment - Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
					<a href="{{ url('/home')}}"><h3>Cricket Assignment 2020</h3></a>
					<strong>All Matches</strong>
				</div>

                <div class="card-body">
					<!--<h4>All Teams</h4>-->
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>Matches</li>
					</ul>
					
                    <div class="table-responsive">
					<table class="table table-bordered table-striped table-hover ">
						<thead>
							<tr>
								<th width="10">S.No.</th>
								<th>Matches</th>
								<th>Winner Team</th>
								<th>Highest Score</th>
								<th>Is Draw</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
						@php
							$pageno = (request()->get('page') > 0) ? request()->get('page') : 1;
							$counter = ($pageno-1) * config('custom.page_limit')+1; 
						@endphp						
						@if(count($matches) > 0)
							@foreach($matches as $key => $match)
								<tr data-entry-id="{{ $match->id }}">
									<td>
										{{ $counter }}
									</td>
									<td>
										<h5>{{ $match->title }}</h5>
									</td>
									<td>
										<h5>{{ App\Team::find($match->winner_team)->name }}</h5>
									</td>
									<td>
										@if($match->team_a_score > $match->team_b_score)
											{{ $match->team_a_score }}
										@else
											{{ $match->team_b_score }}
										@endif		
									</td>
									<td>
										{{ $match->is_draw }}
									</td>
									<td width="125">
									   {{ date( 'd F Y', strtotime($match->created_at)) ?? '' }}
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

					@if(count($matches) > 0)
					{{ $matches->links() }}
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
