@extends('user.layouts.app')

@section('htmlheader_title')
Input Ticket
@endsection


@section('main-content')

<section class="content-header">
	<h1>
		Create Ticket
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-navicon"></i> Employee</a></li>
		<li class="active">Create Ticket</li>
	</ol>
</section>

<section class="content">

	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title">Ticket Form</h3>
		</div><!-- /.box-header -->

		<div class="box-body">
		{!! Form::open(['url' => 'ticket/create']) !!}

			<div class="form-group">	
				{!! Form::label('problem_id', 'Problem : ')  !!}	
				{!! Form::select('problem_id', $problems, null, ['class' => 'form-control']) !!}
			</div><!-- /.form-group -->

			<div class="form-group">
				{!! Form::label('description', 'Description : ')  !!}
				{!! Form::textarea('description', null, ['class' => 'form-control'])  !!}
			</div>

			<div class="form-group">
				{!! Form::label('Location', 'Location : ')  !!}
				{!! Form::text('location', null, ['class' => 'form-control'])  !!}
			</div>

			<div class="box-footer">
				{!! Form::submit('Add Ticket', ['class' => 'btn btn-success form-control'])  !!}
			</div>

		

		{!! Form::close() !!}  
		</div>

	</div><!-- /.box -->

	@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your Ticket.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>

	@elseif(Session::has('flash_message'))
	<div class="alert alert-success alert-dismissable">
		{{ Session::get('flash_message') }}
	</div>
	@endif

</section>

@endsection
