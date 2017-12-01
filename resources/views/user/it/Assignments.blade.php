@extends('user.layouts.app')

@section('htmlheader_title')
{{Auth::user()->getName()}} Assignments
@endsection


@section('main-content')

<section class="content-header">
	<h1>
		Assignments
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-navicon"></i> IT</a></li>
		<li class="active">Show assignments</li>
	</ol>
</section>

<section class="content">

	<div class="box box-primary">
		<div class="box-header">
			<i class="ion ion-clipboard"></i>
			<h3 class="box-title">New assignments</h3>
		</div><!-- /.box-header -->

		<div class="box-body">
			@if($new)
			@foreach($new as $data)
			<ul class="todo-list">
				
				<li class="bg-aqua">
					<!-- drag handle -->
					<span class="handle">
						<a href="{{ url('assignments/'. $data->id) }}">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						</a>
					</span>
					<!-- todo text -->
					
					<span class="text">#{{$data->id}}</span>
					<span class="text">{{App\Problem::find($data->problem_id)->getName()}}</span>
					<span class="text">-</span>
					<span class="text">{{App\User::find($data->employee_id)->getBureau()}}</span>
					<span class="text">-</span>
					<span class="text">{{App\User::find($data->employee_id)->getName()}}</span>
					
					<!-- General tools such as edit or delete-->
					
				</li>
				

				<br>

				@endforeach
				
			</ul>
		</div><!-- /.box-body -->
		@else
		No new assignments.
		@endif
	</div><!-- /.box -->

	@if($active)
	<br>
	<div class="box box-primary">
		<div class="box-header">
			<i class="ion ion-clipboard"></i>
			<h3 class="box-title">Active assignment</h3>
		</div><!-- /.box-header -->

		<div class="box-body">
			@foreach($active as $data)
			<ul class="todo-list">
				<li class="bg-blue">
					<!-- drag handle -->
					<span class="handle">
						<a href="{{ action('ITController@ShowAssignmentDetail',[$data->id]) }}">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						</a>
					</span>
					<!-- todo text -->
					<span class="text">#{{$data->id}}</span>
					<span class="text">{{App\Problem::find($data->problem_id)->getName()}}</span>
					<span class="text">-</span>
					<span class="text">{{App\User::find($data->employee_id)->getBureau()}}</span>
					<span class="text">-</span>
					<span class="text">{{App\User::find($data->employee_id)->getName()}}</span>
				</li>
				<br>
				@endforeach
				
			</ul>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	@endif

	@if($denied)
	<br>
	<div class="box box-primary">
		<div class="box-header">
			<i class="ion ion-clipboard"></i>
			<h3 class="box-title">Denied assignment</h3>
		</div><!-- /.box-header -->

		<div class="box-body">
			@foreach($denied as $data)
			<ul class="todo-list">
				<li class="bg-purple">
					<!-- drag handle -->
					<span class="handle">
						<a href="{{ action('ITController@ShowAssignmentDetail',[$data->id]) }}">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						</a>
					</span>
					<!-- todo text -->
					<span class="text">#{{$data->id}}</span>
					<span class="text">{{App\Problem::find($data->problem_id)->getName()}}</span>
					<span class="text">-</span>
					<span class="text">{{App\User::find($data->employee_id)->getBureau()}}</span>
					<span class="text">-</span>
					<span class="text">{{App\User::find($data->employee_id)->getName()}}</span>
				</li>
				<br>
				@endforeach
				
			</ul>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	@endif

</section>

@if(Session::has('flash_message'))
<div class="alert alert-info alert-dismissable">
	{{ Session::get('flash_message') }}
</div>
@endif

@endsection