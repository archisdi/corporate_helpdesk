<script>
    var pusher = new Pusher("51075af375c338e9e965", {
		cluster: 'ap1',
		encrypted: true
	});

	var channel = pusher.subscribe('Operator_channel');


	channel.bind('new_ticket', function(data) {

		var animate_in = $('#animate_in').val(),animate_out = $('#animate_out').val();

		var notice = new PNotify({
		    title: 'New Ticket Input',
		    text: data.employee_name+" - "+data.bureau,
		    type: 'info',
		    icon: 'fa fa-ticket',
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
   	 		window.location.href = "{{ url('tickets/new') }}";
		});

	});

</script>