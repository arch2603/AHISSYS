<header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation">
        {{--<div class="menu-header">--}}
        {{--<ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">--}}
        {{--<li role="menuitem"><a href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a>--}}
        {{--</li>--}}
        {{--<li role="menuitem"><a href="{{ route('users') }}"><i--}}
        {{--class="fa fa-user fa-fw"></i>&nbsp;Users</a>--}}
        {{--</li>--}}
        {{--<li role="menuitem"><a href="{{ route('employees') }}"><i class="fa fa-users fa-fw"></i>&nbsp;Employees</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ asset("/bower_components/AdminLTE/dist/img/admin.jpg") }}" class="user-image"
                             alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->u_fname }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset("/images/mypicture.jpg") }}"
                                 class="img-circle" alt="User Image">

                            <p>
                                Hello {{ Auth::user()->u_fname }}
                            </p>
                        </li><!--end .user-header -->

                        <!-- Main Menu Footer -->
                        <li class="user-footer">
                            @if(Auth::guest())
                                <div class="pull-left">
                                    <a href="{{ route('login') }}" class="btn btn-default btn-flat">Login</a>
                                </div>
                            @else
                                <div class="pull-left">
                                    <a href="{{ url('user-profile') }}" class="btn btn-default btn-flat">Profile</a>
                                </div>


                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-lock" aria-hidden="false"></i>&nbsp;Logout
                                    </a>

                                </div>
                            @endif
                        </li><!-- end Main Menu Footer -->
                    </ul><!-- end .dropdown-menu -->
                </li>
            </ul>
        </div><!--end of .navbar-custom-menu -->
    </nav>
</header>
<form id="logout-form" action="{{ route('logout') }}" method="POST"
      style="display: none;">
    {{ csrf_field() }}
</form>
