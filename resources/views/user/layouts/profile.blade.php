@extends('user.layouts.app')

@section('htmlheader_title')
{{Auth::user()->getName()}} Profile
@endsection


@section('main-content')

	@include('user.layouts.content.ProfileContent')

@endsection