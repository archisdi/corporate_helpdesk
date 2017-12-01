@extends('user.layouts.app')

@section('htmlheader_title')
Respond Tickets
@endsection


@section('main-content')

<section class="content-header">
	<h1>
		Respond Ticket
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-navicon"></i> Admin</a></li>
		<li class="active">Respond Ticket</li>
	</ol>
</section>

<section class="content">

	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Ticket #{{$data->id}}</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
			<form class="form-horizontal">
				<div class="box-body">

						<label class="col-sm-2 control-label">Time Inserted</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{$data->created_at}}</div>
						</div>
					
						<label class="col-sm-2 control-label">Employee Name</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{Auth::user()->find($data->employee_id)->getName()}}</div>
						</div>
					
						<label class="col-sm-2 control-label">Bureau</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{Auth::user()->getBureau()}}</div>
						</div>

						<label class="col-sm-2 control-label">Problem Type</label>
						<div class="col-sm-10">
							<div class="well well-sm">{{App\Problem::find($data->problem_id)->getName()}}</div>
						</div>

						<label class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<div class="well">{{$data->description}}</div>
						</div>

						<label class="col-sm-2 control-label">Location</label>
						<div class="col-sm-10">
							<div class="well">{{$data->location}}</div>
						</div>

				</div><!-- /.box-body -->
				<div class="box-footer">
					<button type="button" class="btn btn-default btn-block btn-flat bg-olive-active" data-toggle="modal" data-target="#myModal1">Approve</button>
					<button type="button" class="btn btn-default btn-block btn-flat bg-yellow-active" data-toggle="modal" data-target="#myModal2">Re-input Request</button>					

				</div><!-- /.box-footer -->
			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box-body -->

</section>


@endsection

@section('modal-content')


<div class="example-modal" >
	<div class="modal fade modal-success" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Assign IT Support</h4>
				</div>
				<div class="modal-body">
					<fieldset>
						{!! Form::open(['url' => 'tickets/respond']) !!}  

						{!! Form::hidden('respond_id', '1', null) !!}
						{!! Form::hidden('id', $data->id, null) !!}

						<div class="form-group">	
							{!! Form::label('it_id', 'IT Support : ')  !!}	
							{!! Form::select('it_id', $supports, null, ['class' => 'form-control']) !!}
						</div><!-- /.form-group -->

					</div>
					<div class="modal-footer">
						{!! Form::button('Cancel', ['class' => 'btn btn-outline pull-left', 'data-dismiss' => 'modal']) !!}
						{!! Form::submit('Approve & Asssign', ['class' => 'btn btn-outline'])  !!}
					</div>
					{!! Form::close() !!} 

			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div><!-- /.example-modal -->

<div class="example-modal" >
	<div class="modal fade modal-warning" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Re-input Request</h4>
				</div>
				<div class="modal-body">
					<fieldset>
						<fieldset>
						{!! Form::open(['url' => 'tickets/respond']) !!}  

						{!! Form::hidden('respond_id', '2', null) !!}
						{!! Form::hidden('id', $data->id, null) !!}

						<div class="form-group">	
							{!! Form::label('temp', 'Re-input Request Reason : ')  !!}	
							{!! Form::text('temp', null, ['class' => 'form-control']) !!}
						</div><!-- /.form-group -->

					</div>
					<div class="modal-footer">
						{!! Form::button('Cancel', ['class' => 'btn btn-outline pull-left', 'data-dismiss' => 'modal']) !!}
						{!! Form::submit('Send', ['class' => 'btn btn-outline'])  !!}
					</div>
					{!! Form::close() !!} 

				</fieldset>

				</fieldset>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div><!-- /.example-modal -->

@endsection