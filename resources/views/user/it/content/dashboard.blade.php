<section class="content-header">
  <h1>
    Home
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-navicon"></i> IT</a></li>
    <li class="active">Home</li>
  </ol>
</section>

<section class="content">
	<div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-blue">
                  <div class="widget-user-image">
                    <img class="img-circle" src="{{asset('/img/users/'. Auth::user()->getImg())}}" alt="User Avatar">
                  </div><!-- /.widget-user-image -->
                  <h3 class="widget-user-username">{{Auth::user()->getName()}}</h3>
                  <h5 class="widget-user-desc">{{Auth::user()->getBureau()}} / {{Auth::user()->getPosition()}}</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Ticket Handled <span class="pull-right badge bg-green">{{$handled}}</span></a></li>
                    <li><a href="#">Active Ticket <span class="pull-right badge bg-blue">{{$active}}</span></a></li>
                    <li><a href="#">Denied Ticket <span class="pull-right badge bg-purple">{{$denied}}</span></a></li>
                    <li><a href="#">Tickets Total <span class="pull-right badge bg-navy">{{$total}}</span></a></li>
                  </ul>
                </div>
              </div><!-- /.widget-user -->
</section>
