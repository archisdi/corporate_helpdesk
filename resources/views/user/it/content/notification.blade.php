<script>
    var pusher = new Pusher("51075af375c338e9e965", {
		cluster: 'ap1',
		encrypted: true
	});

	var channel = pusher.subscribe('IT{{Auth::user()->getID()}}');


	channel.bind('new_assignment', function(data) {

		var animate_in = $('#animate_in').val(),animate_out = $('#animate_out').val();

		var notice = new PNotify({
		    title: 'New Assignment',
		    text: 	data.problem+" Problem<br>"
		    		+data.employee_name+" - "+data.bureau,
		    type: 'info',
		    icon: 'fa fa-list',
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
   	 		window.location.href = "{{ url('assignments') }}";
		});

	});

	channel.bind('closed', function(data) {

		var animate_in = $('#animate_in').val(),animate_out = $('#animate_out').val();

		var notice = new PNotify({
		    title: 'Ticket #'+data.id+" is closed",
		    text: 	data.problem+" Problem<br>"
		    		+data.employee_name+" - "+data.bureau,
		    type: 'success',
		    icon: 'fa fa-check',
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

	channel.bind('denied', function(data) {

		var animate_in = $('#animate_in').val(),animate_out = $('#animate_out').val();

		var notice = new PNotify({
		    title: 'Ticket #'+data.id+" confirmation denied",
		    text: 	"Reason : "+data.reason+"<br>"+data.problem+" Problem<br>"
		    		+data.employee_name+" - "+data.bureau,
		    type: 'error',
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

		notice.get().click(function() {
   	 		window.location.href = "{{ url('assignments') }}";
		});

	});

</script>