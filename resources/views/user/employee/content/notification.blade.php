<script>
	var pusher = new Pusher("{{env("PUSHER_KEY")}}", {
		cluster: 'ap1',
		encrypted: true
	});

	var channel = pusher.subscribe('EMP{{Auth::user()->getID()}}');


	channel.bind('on_process', function(data) {

		var animate_in = $('#animate_in').val(),animate_out = $('#animate_out').val();

		var notice = new PNotify({
		    title: 'Ticket #'+data.id+" is on process",
		    text: 	data.problem+" Problem <br>"
		    		+"Support : "+data.it_name,
		    icon: 'fa fa-spinner',
		    hide: false,
		    styling: 'bootstrap3',
		    buttons: {
        		closer: true,
        		sticker: false
    		},
    		animate: {
        		animate: true,
        		in_class: animate_in,
        		out_class: animate_out
    		}

		});

		notice.get().click(function() {
   	 		window.location.href = "{{ url('tickets/view/active') }}";
		});

	});

	channel.bind('done', function(data) {

		var animate_in = $('#animate_in').val(),animate_out = $('#animate_out').val();

		var notice = new PNotify({
		    title: 'Ticket #'+data.id+" waiting confirmation",
		    text: 	data.problem+" Problem <br>"
		    		+"Support : "+data.it_name,
		    type: 'success',
		    icon: 'fa fa-clock-o',
		    hide: false,
		    styling: 'bootstrap3',
		    buttons: {
        		closer: true,
        		sticker: false
    		},
    		animate: {
        		animate: true,
        		in_class: animate_in,
        		out_class: animate_out
    		}

		});

		notice.get().click(function() {
   	 		window.location.href = "{{ url('tickets/view/active') }}";
		});

	});

	channel.bind('reject', function(data) {

		var animate_in = $('#animate_in').val(),animate_out = $('#animate_out').val();

		var notice = new PNotify({
		    title: 'Ticket #'+data.id+" not valid",
		    text: 	"Reason : "+data.reason+"<br>"
		    		+"Please re-input your ticket",
		    icon: 'fa fa-close',
		    hide: false,
		    styling: 'bootstrap3',
		    buttons: {
        		closer: true,
        		sticker: false
    		},
    		animate: {
        		animate: true,
        		in_class: animate_in,
        		out_class: animate_out
    		}

		});

	});


</script>