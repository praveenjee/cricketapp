@extends('layouts.app')

@section('page_title',  'Cricket Assignment - Team Add')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
					<a href="{{ url('/home')}}"><h3>Cricket Assignment 2020</h3></a>
					<strong>Play Match</strong>
				</div>

                <div class="card-body">
					<!--<h4>All Teams</h4>-->
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li><a href="{{ url('/matches') }}">Matches</a></li>
						<li>&nbsp;&raquo;&nbsp;</li>
						<li>Play Match</li>
					</ul>
					
					<div class="row">
						<div class="col-md-6">
							<form action="" method="POST" enctype="multipart/form-data">
								@csrf 
								<div class="form-group {{ $errors->has('team_a') ? 'has-error' : '' }}">
									<div class="row">
										<div class="col-md-3">
											<label for="team_a">Team A*</label>
										</div>
										<div class="col-md-9">
											<select name="team_a" class="form-control">
												<option value="">Select Team</option>
												@foreach($teams as $team)
												<option value="{{$team->id}}">{{$team->name}}</option>
												@endforeach
											</select>									
											
											@if($errors->has('team_a'))
												<em class="invalid-feedback">
													{{ $errors->first('team_a') }}
												</em>
											@endif								  
										</div>
									 </div>
								</div> 
								
								<div class="form-group {{ $errors->has('team_b') ? 'has-error' : '' }}">
									<div class="row">
										<div class="col-md-3">
											<label for="team_b">Team B*</label>
										</div>
										<div class="col-md-9">
											<select name="team_b" class="form-control">
												<option value="">Select Team</option>
												@foreach($teams as $team)
												<option value="{{$team->id}}">{{$team->name}}</option>
												@endforeach										
											</select>									
											
											@if($errors->has('team_b'))
												<em class="invalid-feedback">
													{{ $errors->first('team_b') }}
												</em>
											@endif								  
										</div>
									 </div>
								</div>	
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-9">
										<input id="btnPlayMatch" class="btn btn-primary" type="button" value="{{ 'Play Match' }}">
										<a class="btn btn-default" href="{{route('playmatch')}}">{{ trans('global.cancel') }}</a>
									</div>
								</div>
							</form>
							
							<br /><br/>
							<p><strong>Note:</strong> Each team will get 2 points, if they wins the match. If the match is drawn or tie, both team will get 1-1 point.
							</p>
						</div>
						
						<div class="col-md-6">
							<fieldset class="cricketboard">
								<legend class="cricketboard">Cricket Score Board:</legend>
								<p></p>
								<div id="match_score" class="text-center">
									<img src="{{ asset('images/cricket-league.jpg')}}" alt="draw" width="100%"  />
								</div>
								<p></p>
							</fieldset>						
						</div>
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
    <script>
		$(document).on("click", "#btnPlayMatch", function(e){
			var team_a = $("select[name='team_a']").val();
			var team_b = $("select[name='team_b']").val();
			
			if(!team_a || typeof team_a === 'undefined'){
				alert('Please select Team A');
				$("select[name='team_a']").focus();
				return false
			}
			else if(!team_b || typeof team_b === 'undefined'){
				alert('Please select Team B');
				$("select[name='team_b']").focus();
				return false
			}
			else if(team_a == team_b){
				alert('Both team should be different.');
				$("select[name='team_b']").focus();
				return false
			}
			else {
				$.ajaxSetup({
					headers: {'X-CSRF-TOKEN': window._token }
				}); 
				
				$.ajax({
					type: 'POST',
					url: "{{ route('savematch') }}",
					data: {team_a: team_a, team_b: team_b},
					datatype: 'html',
					beforeSend: function() {
						//something before send
						var _html = 'Loading...';
						$("#match_score").empty().html(_html);
					},
					success:function(result){
						if(result !== null){  
							var _html = '';
							$("#match_score").empty().html(result.html);
						}
					},
					error: function (data) {
						console.log('Error:', data);
					}
				}); 				
			}
		});
	</script>
@endsection
