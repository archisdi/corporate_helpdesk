<!DOCTYPE html>

<html lang="en">

@section('htmlheader')
    @include('user.layouts.partials.htmlheader')
@show

@if(Auth::user()->getRole() == 'operator')

<body class="skin-purple sidebar-mini layout-boxed">

@elseif(Auth::user()->getRole() == 'it')

<body class="skin-blue layout-boxed">

@elseif(Auth::user()->getRole() == 'employee')

<body class="skin-green layout-boxed">

@endif



<div class="wrapper">


@if(Auth::user()->getRole() == 'operator')

    @include('user.layouts.partials.mainheader', ['Header' => 'Helpdesk', 'Title' => 'Operator', 'M' => 'O'])

@elseif(Auth::user()->getRole() == 'it')

    @include('user.layouts.partials.mainheader', ['Header' => 'IT', 'Title' => 'Support', 'M' => 'IT'])

@elseif(Auth::user()->getRole() == 'employee')

    @include('user.layouts.partials.mainheader', ['Header' => 'Helpdesk', 'Title' => 'Employee', 'M' => 'E'])

@endif


    @include('user.layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            
            @yield('main-content')
            <div class="notification"></div>

        </section><!-- /.content -->

    </div><!-- /.content-wrapper -->

    @include('user.layouts.partials.controlsidebar')

    @include('user.layouts.partials.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('user.layouts.partials.scripts')
    @yield('chart')
@show

    @yield('modal-content')

</body>
</html>
