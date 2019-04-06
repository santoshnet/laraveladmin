<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield('title') | Laravel Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="{{URL::asset('img/user.jpg')}}" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Santosh Kumar Dash</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <img src="{{URL::asset('img/ld.png')}}" class="img-thumbnail"></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu" id="sidebar-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="{{Request::is('/')? 'active' : null }}"><a href="{{url('/')}}"> <i class="icon-home"></i>Home</a></li>
            
             <li class="{{Request::is('form/*')? 'active' : null }}"><a href="#formDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Forms</a>
              <ul id="formDropdown" class="collapse list-unstyled ">
               
               <li class="{{Request::is('basicform')? 'active' : null }}"><a href="{{route('basicform')}}">Basic Forms</a></li>
               <li class="{{Request::is('advanceform')? 'active' : null }}"><a href="{{route('advanceform')}}">Advance Forms</a></li>
               
              </ul>
            </li>
           
            <li class="{{Request::is('chart')? 'active' : null }}"><a href="{{url('chart')}}"> <i class="fa fa-bar-chart"></i>Charts</a></li>
            <li class="{{Request::is('table')? 'active' : null }}"><a href="{{url('table')}}"> <i class="icon-grid"></i>Tables</a></li>
           
          </ul>
        </div>
        
        <div class="admin-menu">
          <h5 class="sidenav-heading">Admin menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
              <li class=""><a href="#userDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>User Management</a>
                <ul id="userDropdown" class="collapse list-unstyled ">
                   <li class="{{Request::is('users/create')? 'active' : null }}"><a href="{{ route('users.create') }}">Add User</a></li>
                   <li class="{{Request::is('users')? 'active' : null }}"><a href="{{ route('users.index') }}">Users List</a></li>
             
                </ul>
              </li>
              <li class=""><a href="#roleDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user-secret" aria-hidden="true"></i>Role Permission</a>
                <ul id="roleDropdown" class="collapse list-unstyled ">
                   <li class="{{Request::is('roles')? 'active' : null }}"><a href="{{ route('roles.index') }}">Manage Role</a></li>
                   <li class="{{Request::is('permissions')? 'active' : null }}"><a href="{{ route('permissions.index') }}">Manage Permission</a></li>
                   
                </ul>
              </li>

          </ul>
        </div>

      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-align-left fa-2x"></i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Laravel </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item"> 
                  <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
                  </div>
               </li>
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->

                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/user.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/user.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/user.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                
                <!-- Log out-->
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->

         @yield('content')
    
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="footer-area">
            <div class="row">
              <div class="col-sm-6">
                <p>Your company &copy; 2019</p>
              </div>
              <div class="col-sm-6 text-right">
                <p>Design by <a href="https://quintuslabs.com" class="external">Quintus Labs</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('js/front.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
  </body>
</html>