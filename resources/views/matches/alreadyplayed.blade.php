<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="card-body">
				<div class="row">					
					<h5>{{ $match->title }} is already played on 
					<br/>{{ date('d F Y h:i A', strtotime($match->created_at)) }}</h5>
				</div>
			</div>
		</div>
	</div>
</div>