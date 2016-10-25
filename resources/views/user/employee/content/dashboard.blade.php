<section class="content-header">
	<h1>
		Home
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-navicon"></i> Employee</a></li>
		<li class="active">Home</li>
	</ol>
</section>

<section class="content">
	<div class="box box-widget widget-user-2">
		<!-- Add the bg color to the header using any of the bg-* classes -->
		<div class="widget-user-header bg-green">
			<div class="widget-user-image">
				<img class="img-circle" src="{{asset('/img/users/'. Auth::user()->getImg())}}" alt="User Avatar">
			</div><!-- /.widget-user-image -->
			<h3 class="widget-user-username">{{Auth::user()->getName()}}</h3>
			<h5 class="widget-user-desc">{{Auth::user()->getBureau()}} / {{Auth::user()->getPosition()}}</h5>
		</div>
	</div><!-- /.widget-user -->

	<section class="content">

		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<!-- The time line -->
				@if($datas)
				<ul class="timeline">
					<!-- timeline time label -->
					<li class="time-label">
						<span class="bg-green">
							Ticket Insertion Timeline
						</span>
					</li>
					<!-- /.timeline-label -->
					<!-- timeline item -->

						@foreach($datas as $data)

						<li>
							<i class="fa fa-ticket bg-info"></i>
							<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> {{$data->created_at}}</span>
								<h3 class="timeline-header"><a href="#">#{{$data->id}}</a></h3>
								<div class="timeline-body">
								
								<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
        							{{App\Problem::find($data->problem_id)->getName()}} : {{$data->description}}
      							</p>								
								</div>
								<div class="timeline-footer">
									<span class="btn bg-{{App\Status::find($data->status_id)->getColor()}} btn-xs">{{App\Status::find($data->status_id)->getName()}}</span>
							</div>
						</li>

						@endforeach
						<li>
                  			<i class="fa fa-clock-o bg-gray"></i>
                		</li>
					@else
						You haven't insert any ticket yet.
					@endif

				</section>