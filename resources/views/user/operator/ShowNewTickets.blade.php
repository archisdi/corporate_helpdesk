@extends('user.layouts.app')

@section('htmlheader_title')
	New Tickets
@endsection


@section('main-content')

<section class="content-header">
	<h1>
		New Tickets
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-navicon"></i> Operator</a></li>
		<li class="active">New Tickets</li>
	</ol>
</section>

<section class="content">

	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Inserted Ticket</h3>
		</div><!-- /.box-header -->

		<div class="box-body">

			@if($datas)
			@foreach($datas as $data)
			<a href="{{ action('OperatorController@RespondTicket',[$data->id]) }}">
			<div class="callout callout-info">
				<h4>#{{$data->id}} - {{App\user::find($data->employee_id)->getBureau()}}</h4>
				<p>{{App\User::find($data->employee_id)->getName()}}</p>
				<p>{{$data->description}}</p>
				<p>{{$data->created_at}}</p>
			</div>
			</a>
			@endforeach
			@else
				No New Tickets
			@endif
		</div>

	</div><!-- /.box -->

	@if(Session::has('flash_message'))
	<div class="alert alert-info alert-dismissable">
		{{ Session::get('flash_message') }}
	</div>
	@endif

</section>



@endsection
