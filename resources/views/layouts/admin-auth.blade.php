<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/admin/img/favicon.ico">
    <link rel="icon" type="image/png" href="/assets/admin/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>{!! $title . ' &mdash; ' . 'Ecommerce Dashboard' !!}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
    <!-- CSS Files -->
    <link href="/assets/admin/css/material-dashboard.min.css?v=2.1.0" rel="stylesheet" />
    <link href="/assets/admin/css/helper.css" rel="stylesheet" />
    <link href="/assets/admin/demo/demo.css?v=2.1" rel="stylesheet" />
</head>
<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="black">
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <div class="logo">
                <a href="{{ route('dashboard') }}" class="simple-text logo-mini">IA</a>
                <a href="{{ route('dashboard') }}" class="simple-text logo-normal">IdharAo.com</a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="/assets/admin/img/faces/avatar.jpg" />
                    </div>
                    <div class="user-info">
                        <a data-toggle="collapse" href="#collapseExample" class="username">
                            <span>{{ Auth::user()->name }}<b class="caret"></b></span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal"> My Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> EP </span>
                                        <span class="sidebar-normal"> Edit Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> S </span>
                                        <span class="sidebar-normal"> Settings </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('dashboard') }}"><i class="material-icons">dashboard</i><p> Dashboard </p></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}"><i class="material-icons">local_offer</i><p>Categories</p></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}"><i class="material-icons">collections</i><p>Products</p></a></li>
                    <hr/>
                    <li class="nav-item"><a class="nav-link" href="{{ __('/') }}" target="_blank"><i class="material-icons">home</i><p>Preview</p></a></li>
                    <hr/>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="material-icons">power_settings_new</i>
                            <p>{{ __('Logout') }}</p>
                        </a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#categories">
                            <i class="material-icons">local_offer</i><p> Categories<b class="caret"></b></p>
                        </a>
                        <div class="collapse" id="categories">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ __('#!') }}">
                                        <span class="sidebar-mini"> N </span><span class="sidebar-normal">Name</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <a class="navbar-brand">{{ $title }}</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i><div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}"><i class="material-icons">dashboard</i><p class="d-lg-none d-md-block">Stats</p></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i><p class="d-lg-none d-md-block">Account</p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

        @yield('page-content')
        
    </div>
    <!--   Core JS Files   -->
    <script src="/assets/admin/js/core/jquery.min.js"></script>
    <script src="/assets/admin/js/core/popper.min.js"></script>
    <script src="/assets/admin/js/core/bootstrap-material-design.min.js"></script>
    <script src="/assets/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/admin/js/plugins/moment.min.js"></script>
    <script src="/assets/admin/js/plugins/sweetalert2.js"></script>
    <script src="/assets/admin/js/plugins/jquery.validate.min.js"></script>
    <script src="/assets/admin/js/plugins/jquery.bootstrap-wizard.js"></script>
    <script src="/assets/admin/js/plugins/bootstrap-selectpicker.js"></script>
    <script src="/assets/admin/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/admin/js/plugins/jquery.dataTables.min.js"></script>
    <script src="/assets/admin/js/plugins/bootstrap-tagsinput.js"></script>
    <script src="/assets/admin/js/plugins/jasny-bootstrap.min.js"></script>
    <script src="/assets/admin/js/plugins/fullcalendar.min.js"></script>
    <script src="/assets/admin/js/plugins/jquery-jvectormap.js"></script>
    <script src="/assets/admin/js/plugins/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="/assets/admin/js/plugins/arrive.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="/assets/admin/js/plugins/chartist.min.js"></script>
    <script src="/assets/admin/js/plugins/bootstrap-notify.js"></script>
    <script src="/assets/admin/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
    <script src="/assets/admin/demo/demo.js"></script>
    <script src="/assets/admin/js/custom.js"></script>

    <script>
        @if(Session::has('success'))
            md.showNotification('top','right', "{{ Session::get('success') }}", 'success');
        @elseif(Session::has('info'))
            md.showNotification('top','right', "{{ Session::get('info') }}", 'info');
        @elseif(Session::has('error'))
            md.showNotification('top','right', "{{ Session::get('error') }}", 'danger');
        @endif
    </script>

    @yield('page-scripts')
</body>
</html>