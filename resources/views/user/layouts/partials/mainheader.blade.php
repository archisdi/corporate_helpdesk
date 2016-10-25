<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">H <b>{{$M}}</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{{$Header}} <b>{{$Title}}</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav"> 

                @if (Auth::user()->getRole() == 'employee')

                <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('/img/users/'. Auth::user()->getImg())}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{Auth::user()->getName()}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('/img/users/'. Auth::user()->getImg())}}" class="img-circle" alt="User Image">
                    <p>
                      {{Auth::user()->getName()}}
                      <small>{{Auth::user()->getBureau()}} / {{Auth::user()->getPosition()}}</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{url('profile')}}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{url('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>


                @else

                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ion-gear-a"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <ul class="menu">
                                <li><a href="{{url('profile')}}" class="ion-person"> Profile</a></li>
                                <li><a href="{{ url('/logout') }}" class="ion-power"> Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


              @endif

          </ul>
      </div>
  </nav>
</header>