@extends('user.layouts.app')

@section('htmlheader_title')
Home
@endsection


@section('main-content')

	@if(Auth::user()->getRole() == 'operator')

		@include('user.operator.content.dashboard')

	@elseif(Auth::user()->getRole() == 'it')

		@include('user.it.content.dashboard')

	@elseif(Auth::user()->getRole() == 'employee')

		@include('user.employee.content.dashboard')

	@endif


@endsection

@if(Auth::user()->getRole() == 'operator')
	@section('chart')
		@include('user.operator.content.chart')
	@endsection
@endif
