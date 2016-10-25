@extends('user.layouts.app')

@section('htmlheader_title')
{{Auth::user()->getName()}} Tickets
@endsection


@section('main-content')

<section class="content-header">
	<h1>
		Show Tickets
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-navicon"></i> Employee</a></li>
		<li class="active">Show Tickets</li>
	</ol>
</section>

<section class="content">

	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title">Active Tickets</h3>
		</div><!-- /.box-header -->

		<div class="box-body">

			@if($datas)
			@foreach($datas as $data)
			<!-- <a href="{{ action('PageController@ShowTicket',[$data->id]) }}"> -->

			<div class="callout bg-{{App\Status::find($data->status_id)->getColor()}}">
				<h4>#{{$data->id}} {{App\Status::find($data->status_id)->getName()}} @if($data->it_id)- {{App\User::find($data->it_id)->getName()}} @endif</h4>
				<p>{{$data->description}}</p>
				<p>{{$data->created_at}}</p>

				@if($data->status_id == 5)
				<p><button type="button" class="btn btn-flat btn-success" data-toggle="modal" data-target="#myModal2">Confirm</button> &nbsp; <button type="button" class="btn btn-flat btn-danger" data-toggle="modal" data-target="#myModal">Deny</button></p>
				<div class="example-modal" >
					<div class="modal fade modal-danger" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Ticket Denial Confirmation</h4>
								</div>
								<div class="modal-body">
									<fieldset>
										{!! Form::open(['url' => 'ticket']) !!}
										<div class="form-group">
											{!! Form::hidden('respond_id', '2', null) !!}
											{!! Form::hidden('id', $data->id, null) !!}
											<div class="form-group">
												<label>Denial Reason</label>
												<input type="text" name="temp" class="form-control" required="">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										{!! Form::button('Cancel', ['class' => 'btn btn-outline pull-left', 'data-dismiss' => 'modal']) !!}
										{!! Form::submit('Confirm Denial', ['class' => 'btn btn-outline'])  !!}
									</div>
									{!! Form::close() !!} 

								</fieldset>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div><!-- /.example-modal -->
				<div class="example-modal" >
				<div class="modal fade modal-success" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Confirm Ticket Completion</h4>
								</div>
								<div class="modal-body">
									<fieldset>
										{!! Form::open(['url' => 'ticket']) !!}  

										{!! Form::hidden('respond_id', '1', null) !!}
										{!! Form::hidden('id', $data->id, null) !!}

									
										{!! Form::button('Cancel', ['class' => 'btn btn-outline pull-left', 'data-dismiss' => 'modal']) !!}
										{!! Form::submit('Confirm Completion', ['class' => 'btn btn-outline pull-right'])  !!}
									
									{!! Form::close() !!} 
									</div>

								</fieldset>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div><!-- /.example-modal -->
				@endif
			</div>
			<!-- </a> -->
			@endforeach
			@else
			You dont have any active ticket.
			@endif
		</div>

	</div><!-- /.box -->

</section>

@endsection
