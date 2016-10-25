
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>



<script src="{{ asset('/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>

<script src="//js.pusher.com/3.0/pusher.min.js"></script>

<script type="text/javascript" src="{{ asset('/js/pnotify.custom.min.js') }}"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/pnotify.custom.min.css') }}" />

@if(Auth::user()->getRole() == 'operator')

	@include('user.operator.content.notification')

@elseif(Auth::user()->getRole() == 'it')

	@include('user.it.content.notification')

@elseif(Auth::user()->getRole() == 'employee')

	@include('user.employee.content.notification')

@endif
