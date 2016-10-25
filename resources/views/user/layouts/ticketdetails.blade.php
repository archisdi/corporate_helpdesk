@extends('user.layouts.app')

@section('htmlheader_title')
	Tiket #{{$data->id}}
@endsection


@section('main-content')

<section class="content-header">
	<h1>
		Ticket Details
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-navicon"></i> Admin</a></li>
		<li class="active">New Tickets</li>
	</ol>
</section>

<section class="content">

	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Ticket #{{$data->id}}</h3>
		</div><!-- /.box-header -->

		<div class="box-body">

			<form class="form-horizontal">
				<div class="box-body">

						<label class="col-sm-2 control-label">Ticket Status</label>
						<div class="col-sm-10">
							<div class="well well-sm bg-{{App\Status::find($data->status_id)->getColor()}}">{{App\Status::find($data->status_id)->getName()}}</div>
						</div>

					
						<label class="col-sm-2 control-label">Time Inserted</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{$data->created_at}}</div>
						</div>
					

					@if($data->admin_id)
						<label class="col-sm-2 control-label">Supervisor</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{Auth::user()->find($data->admin_id)->getName()}}</div>
						</div>
					@endif

					@if($data->it_id)
						<label class="col-sm-2 control-label">Assignee</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{Auth::user()->find($data->it_id)->getName()}}</div>
						</div>
					@endif

						<label class="col-sm-2 control-label">Employee Name</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{Auth::user()->find($data->employee_id)->getName()}}</div>
						</div>

						<label class="col-sm-2 control-label">Bureau</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{Auth::user()->getBureau()}}</div>
						</div>

						<label class="col-sm-2 control-label">Location</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{$data->location}}</div>
						</div>

						<label class="col-sm-2 control-label">Problem Type</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{App\Problem::find($data->problem_id)->getName()}}</div>
						</div>

						<label class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<div class="well">{{$data->description}}</div>
						</div>


					@if($data->temp)
						<label class="col-sm-2 control-label">Denial Reason</label>
						<div class="col-sm-10">
							<div class="well">{{$data->temp}}</div>
						</div>
					@endif

					@if($data->closed_at)
						<label class="col-sm-2 control-label">Closed Time</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{$data->closed_at}}</div>
						</div>
					@endif
				<a href="{{url('tickets/view/all')}}" class="btn btn-default">Back</a>
				</div><!-- /.box-body -->
			</form>

			
		</div>

	</div><!-- /.box -->

</section>

@endsection