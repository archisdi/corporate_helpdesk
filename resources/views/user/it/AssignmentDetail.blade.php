@extends('user.layouts.app')

@section('htmlheader_title')
Respond Tickets
@endsection


@section('main-content')

  		@if($data->status_id == 2)
			{{$text = 'Process Assignment'}}
		@elseif($data->status_id == 4)
			{{$text = 'Finish Assignment'}}
		@elseif($data->status_id == 6)
			{{$text = 'Re-process Assignment'}}
		@endif

		@include('user.it.content.DetailContent', ['SubmitButton' => $text])

@endsection