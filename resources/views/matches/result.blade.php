<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="card-body">
				<div class="row">
					<a href="javascript:void(0);">
						<h4>{{ $match->title}}</h4>
					</a>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">
						{{ App\Team::find($match->team_a)->name }}<br />
						Score: <strong>{{$match->team_a_score}}</strong>
					</div>
					<div class="col-md-6 text-center">
						{{App\Team::find($match->team_b)->name}}<br />
						Score: <strong>{{$match->team_b_score}}</strong>
					</div>					
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div style="margin:20px 0;">
							@if($match->is_draw == 'N')
								Winner : 
								<span class="text-success">
									<strong>{{ App\Team::find($match->winner_team)->name }} </strong>
								</span>
							@endif
							
							@if($match->is_draw == 'Y')
								<span class="text-primary">
									<strong>Match is tie</strong>
								<span class="text-primary">
							@endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
					@if($match->is_draw == 'N')
						<img src="{{ asset('images/congratulations.jpg')}}" alt="congratulation" width="100%" />
					@else
						<img src="{{ asset('images/draw.jpg')}}" alt="draw" width="100%" />
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>