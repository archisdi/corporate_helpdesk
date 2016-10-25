<section class="content-header">
    <h1>
        Ticket's History
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#"><i class="fa fa-navicon"></i>
                @if(Auth::user()->getRole() == 'operator')
                Operator
                @elseif(Auth::user()->getRole() == 'it')
                IT
                @elseif(Auth::user()->getRole() == 'employee')
                Employee
                @endif
            </a>
        </li>
        <li class="active">Tickets History</li>
    </ol>
</section>

@if(Auth::user()->getRole() != 'operator')
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tickets Data</h3>
        </div><!-- /.box-header -->
        <div class="box-body">


            @if($datas)

            <div class="table-responsive">
                <table class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Ticket ID</th>
                            <th>Issued Time</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr class="gradeA" >                                                    
                            <td>#{{$data->id}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->description}}</td>
                            <td><small class="label bg-{{App\Status::find($data->status_id)->getColor()}}-active"> {{App\Status::find($data->status_id)->getName()}}</small></td>
                            <td><a href="{{ action('PageController@ShowTicket',[$data->id]) }}"><button type="button" class="btn btn-flat bg-blue"><i class="ion ion-eye"></i></button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</section>
            @else
                No Tickets History.
            @endif

@else
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">On Progress</h3>
        </div><!-- /.box-header -->
        <div class="box-body">

          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#pending" data-toggle="tab">Pending</a></li>
              <li><a href="#process" data-toggle="tab">On process</a></li>
              <li><a href="#waiting" data-toggle="tab">Waiting confirmation</a></li>
              <li><a href="#conreject" data-toggle="tab">Confirmation denied</a></li>
          </ul>
          <div class="tab-content">
              <div class="tab-pane active" id="pending">
                @if($pending)
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Issued Time</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pending as $data)
                            <tr class="gradeA" >                                                    
                                <td>#{{$data->id}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->description}}</td>
                                <td><small class="label bg-{{App\Status::find($data->status_id)->getColor()}}-active"> {{App\Status::find($data->status_id)->getName()}}</small></td>
                                <td><a href="{{ action('PageController@ShowTicket',[$data->id]) }}"><button type="button" class="btn btn-flat bg-blue"><i class="ion ion-eye"></i></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                No tickets data found.
                @endif
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="process">
                @if($process)
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Issued Time</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($process as $data)
                            <tr class="gradeA" >                                                    
                                <td>#{{$data->id}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->description}}</td>
                                <td><small class="label bg-{{App\Status::find($data->status_id)->getColor()}}-active"> {{App\Status::find($data->status_id)->getName()}}</small></td>
                                <td><a href="{{ action('PageController@ShowTicket',[$data->id]) }}"><button type="button" class="btn btn-flat bg-blue"><i class="ion ion-eye"></i></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                No tickets data found.
                @endif

            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="waiting">
                @if($waiting)
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Issued Time</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($waiting as $data)
                            <tr class="gradeA" >                                                    
                                <td>#{{$data->id}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->description}}</td>
                                <td><small class="label bg-{{App\Status::find($data->status_id)->getColor()}}-active"> {{App\Status::find($data->status_id)->getName()}}</small></td>
                                <td><a href="{{ action('PageController@ShowTicket',[$data->id]) }}"><button type="button" class="btn btn-flat bg-blue"><i class="ion ion-eye"></i></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                No tickets data found.
                @endif

            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="conreject">
                @if($creject)
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Issued Time</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($creject as $data)
                            <tr class="gradeA" >                                                    
                                <td>#{{$data->id}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->description}}</td>
                                <td><small class="label bg-{{App\Status::find($data->status_id)->getColor()}}-active"> {{App\Status::find($data->status_id)->getName()}}</small></td>
                                <td><a href="{{ action('PageController@ShowTicket',[$data->id]) }}"><button type="button" class="btn btn-flat bg-blue"><i class="ion ion-eye"></i></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                No tickets data found.
                @endif

            </div><!-- /.tab-pane -->
        </div>
    </div>
</div>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Closed</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#closed" data-toggle="tab">Closed</a></li>
                <li><a href="#reject" data-toggle="tab">Denied</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="closed">
                @if($closed)
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Issued Time</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($closed as $data)
                            <tr class="gradeA" >                                                    
                                <td>#{{$data->id}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->description}}</td>
                                <td><small class="label bg-{{App\Status::find($data->status_id)->getColor()}}-active"> {{App\Status::find($data->status_id)->getName()}}</small></td>
                                <td><a href="{{ action('PageController@ShowTicket',[$data->id]) }}"><button type="button" class="btn btn-flat bg-blue"><i class="ion ion-eye"></i></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                No tickets data found.
                @endif

            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="reject">
                @if($reject)
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Issued Time</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reject as $data)
                            <tr class="gradeA" >                                                    
                                <td>#{{$data->id}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->description}}</td>
                                <td><small class="label bg-{{App\Status::find($data->status_id)->getColor()}}-active"> {{App\Status::find($data->status_id)->getName()}}</small></td>
                                <td><a href="{{ action('PageController@ShowTicket',[$data->id]) }}"><button type="button" class="btn btn-flat bg-blue"><i class="ion ion-eye"></i></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                No tickets data found.
                @endif

            </div>
        </div><!-- /.tab-content -->
    </div><!-- nav-tabs-custom -->
</div>
</div>

</section>
@endif