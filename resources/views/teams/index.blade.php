@extends('layouts.app')

@section('page_title',  'Cricket Assignment - Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
					<a href="{{ url('/home')}}"><h3>Cricket Assignment 2020</h3></a>
					<strong>All Teams</strong>
				</div>

                <div class="card-body">
					<!--<h4>All Teams</h4>-->
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>Team</li>
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
									{{ trans('global.added_on') }}
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
										</a>
									</td>
									<td>
										<a href="{{ route('teams.show', $team->id) }}"><h4>
											{{ $team->name ?? '' }}
										</h4></a>
									</td> 
									<td>
									   {{ date( 'd M Y', strtotime($team->created_at)) ?? '' }}
									</td>
									<td>
										@if($team->status === '1')
											<span class="text-success">Active</span> 
										@else 
											<span class="text-danger">Inactive</span> 
										@endif
									</td>                                                     
									<td align="center">
										<a class="btn btn-xs btn-primary" href="{{ route('teams.show', $team->id) }}">
											<i class="fa fa-eye-slash" aria-hidden="true"></i>
										</a>

										<a class="btn btn-xs btn-info" href="{{ route('teams.edit', $team->id) }}">
											<i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#fff;"></i>
										</a>

										<form action="{{ route('teams.destroy', $team->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
