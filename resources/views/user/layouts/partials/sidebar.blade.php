<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (Auth::user()->getRole() == 'operator')
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/users/'. Auth::user()->getImg())}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->getName() }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                <!-- Status -->
            </div>
        </div>
        @endif

        @if(Auth::user()->getRole() == 'operator')
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is( 'home') ? 'active' : '' }}"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            <li class="{{ Request::is( 'tickets/new') ? 'active' : '' }}"><a href="{{ url('tickets/new') }}"><i class='fa fa-list-ul'></i> <span> New Tickets</span></a></li>
            <li class="{{ Request::is( 'tickets/view/all') ? 'active' : '' }}"><a href="{{ url('tickets/view/all') }}"><i class='fa fa-clock-o'></i> <span> All Tickets</span></a></li>
        </ul>

        @elseif(Auth::user()->getRole() == 'it')
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is( 'home') ? 'active' : '' }}"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            <li class="{{ Request::is( 'assignments') ? 'active' : '' }}"><a href="{{ url('assignments') }}"><i class='fa fa-th-list'></i> <span> Assignment</span></a></li>
            <li class="{{ Request::is( 'tickets/view/all') ? 'active' : '' }}"><a href="{{ url('tickets/view/all') }}"><i class='fa fa-ticket'></i> <span> Assignment History</span></a></li>
        </ul>

        @elseif(Auth::user()->getRole() == 'employee')
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is( 'home') ? 'active' : '' }}"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            <li class="{{ Request::is( 'ticket/create') ? 'active' : '' }}"><a href="{{ url('ticket/create') }}"><i class='fa fa-pencil-square-o'></i> <span> Input Ticket</span></a></li>
            <li class="{{ Request::is( 'tickets/view/active') ? 'active' : '' }}"><a href="{{ url('tickets/view/active') }}"><i class='fa fa-ticket'></i> <span> Active Tickets</span></a></li>
            <li class="{{ Request::is( 'tickets/view/all') ? 'active' : '' }}"><a href="{{ url('tickets/view/all') }}"><i class='fa fa-clock-o'></i> <span> Tickets History</span></a></li>
            <li class="{{ Request::is( 'manual') ? 'active' : '' }}"><a href="{{ url('manual') }}"><i class='fa fa-book'></i> <span> Manual</span></a></li>
        </ul>
        @endif

</section>
<!-- /.sidebar -->
</aside>
