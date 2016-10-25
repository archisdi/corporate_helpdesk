<section class="content-header">
  <h1>
    Dashboard
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-navicon"></i> Admin</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>


<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-ticket"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Inserted</span>
              <span class="info-box-number">{{$all}}</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Closed</span>
              <span class="info-box-number">{{$done}}</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-load-a"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">On Progress</span>
              <span class="info-box-number">{{$progress}}</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-clock-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">On Queue</span>
              <span class="info-box-number">{{$queue}}</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
        </div><!-- /.col -->
      </div><!-- /.row -->

  <!-- DONUT CHART -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Bureaus Recap</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-8">
          <div class="chart-responsive">
            <canvas id="pieChart" height="150"></canvas>
          </div><!-- ./chart-responsive -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.box-body -->
    <div class="box-footer no-padding">
      <ul class="nav nav-pills nav-stacked">
      @foreach($bureaus as $bureau)
        <li><a href="#">{{$bureau->getName()}} <span class="pull-right"></i>@if(App\Ticket::all()->count() != 0) {{number_format((100/(App\Ticket::all()->count())) * (App\Ticket::where('bureau_id',[$bureau->id]))->count(), 1, '.', ',')}} % @else 0 % @endif</span></a></li>
      @endforeach
      </ul>
    </div><!-- /.footer -->
  </div><!-- /.box --> 

  <!-- LINE -->
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Problems Recap</h3>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="barChart" style="height:230px"></canvas>
      </div>
    </div><!-- /.box-body -->
  </div><!-- /.box -->

</section>
