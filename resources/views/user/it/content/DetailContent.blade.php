<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Assignment Details
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-navicon"></i> IT</a></li>
    <li class="active">Assignment Detail</li>
  </ol>
</section>

<!-- Main content -->
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
         Ticket #{{$data->id}}
      </h2>
    </div><!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      Supervisor
      <address>
        <strong>{{App\user::find($data->operator_id)->getName()}}</strong>
        <br>
        {{App\user::find($data->operator_id)->getBureau()}}
        <br>
      </address>
    </div><!-- /.col -->
    <div class="col-sm-4 invoice-col">
      Assigned To
      <address>
        <strong>{{App\user::find($data->it_id)->getName()}}</strong>
        <br>
        {{App\user::find($data->it_id)->getBureau()}}
        <br>
      </address>
    </div><!-- /.col -->
    <div class="col-sm-4 invoice-col">
      Assigned From
      <address>
        <strong>{{App\user::find($data->employee_id)->getName()}}</strong>
        <br>
        {{App\user::find($data->employee_id)->getBureau()}}
        <br>
      </address>
    </div><!-- /.col -->
  </div>

  <!-- Table row -->
  <div class="row">
    <!-- accepted payments column -->
    <div class="col-xs-12">
      <p class="lead">Problem Description</p>
      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
        {{$data->description}}
      </p>
    </div><!-- /.col -->

    @if($data->temp)
    <div class="col-xs-12">
      <p class="lead">Denial Reason</p>
      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
        {{$data->description}}
      </p>
    </div><!-- /.col -->
    @endif

    <div class="col-xs-12">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">Problem Type :</th>
            <td>{{App\Problem::find($data->problem_id)->getName()}}</td>
          </tr>
          <tr>
            <th>Time :</th>
            <td>{{$data->created_at}}</td>
          </tr>
          <tr>
            <th>Location :</th>
            <td>{{$data->location}}</td>
          </tr>
          <tr>
            <th>Ticket Status :</th>
            <td class="bg-{{App\Status::find($data->status_id)->getColor()}}">{{App\Status::find($data->status_id)->getName()}}</td>
          </tr>
        </table>
      </div>
    </div><!-- /.col -->
  </div><!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">

    {!! Form::open(['url' => 'assignments']) !!}

      {!! Form::hidden('id', $data->id, null) !!}
      <a href="/assignments" class="btn btn-default">Back</a>
      {!! Form::submit($SubmitButton, ['class' => 'btn btn-success pull-right '])  !!}

    {!! Form::close() !!}  
    </div>
  </div>
</section><!-- /.content -->
<div class="clearfix"></div>
