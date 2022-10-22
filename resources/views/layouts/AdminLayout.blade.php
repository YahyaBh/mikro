<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="AdminWrap Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Mikro Admin Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Admin/assets') }}/images/favicon.png">
    <link href="{{ asset('Admin/assets') }}/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('Admin/assets') }}/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('Admin/assets') }}/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="{{ asset('Admin/assets') }}/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <link href="{{ asset('Admin/css') }}/style.css" rel="stylesheet">
    <link href="{{ asset('Admin/css') }}/pages/dashboard1.css" rel="stylesheet">
    <link href="{{ asset('Admin/css') }}/colors/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('Admin/assets') }}/images/logo-icon.png" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('Admin/assets') }}/images/logo-light-icon.png" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="{{ asset('Admin/assets') }}/images/logo-text.png" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{ asset('Admin/assets') }}/images/logo-light-text.png" class="light-logo"
                                alt="homepage" />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><img src="{{ asset('Admin/assets') }}/images/users/1.jpg"
                                    alt="user" class="" /> <span class="hidden-md-down">Mark Sanders
                                    &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="nav-item">
                                        <a class="nav-link" role="button">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Profile
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <div class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        this.closest('form').submit(); "
                                                role="button">
                                                <i class="fas fa-sign-out-alt"></i>

                                                {{ __('Log Out') }}
                                            </a>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ route('dashboard') }}"
                                aria-expanded="false"><i class="fa fa-tachometer"></i><span
                                    class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" data-toggle="modal" data-target="#exampleModalCenter"
                                aria-expanded="false"><i class="far fa-folder-plus"></i><span class="hide-menu">Add
                                    Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.cat.home') }}"
                                aria-expanded="false">
                                <i class="far fa-folder-plus"></i><span class="hide-menu">Categories</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        @yield('Admin-Contain')


        <footer class="footer"> © 2021 Adminwrap by <a href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/c4ab0d66b7.js" crossorigin="anonymous"></script>
    <script src="{{ asset('Admin/assets') }}/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('Admin/assets') }}/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('Admin/js') }}/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('Admin/js') }}/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('Admin/js') }}/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('Admin/js') }}/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('Admin/assets') }}/node_modules/raphael/raphael-min.js"></script>
    <script src="{{ asset('Admin/assets') }}/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="{{ asset('Admin/assets') }}/node_modules/d3/d3.min.js"></script>
    <script src="{{ asset('Admin/assets') }}/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="{{ asset('Admin/js') }}/dashboard1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
</body>

</html>
