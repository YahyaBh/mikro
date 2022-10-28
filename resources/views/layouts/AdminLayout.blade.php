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
                        <b>
                            <img src="{{ asset('Admin/assets') }}/images/logo-icon.png" alt="homepage"
                                class="dark-logo" />
                            <img src="{{ asset('Admin/assets') }}/images/logo-light-icon.png" alt="homepage"
                                class="light-logo" />
                        </b>
                        <span color="">
                            MIKRO
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><img src="{{ Auth::user()->profile_photo_path }}"
                                    alt="admin" style="margin-right: 5px" /><span class="hidden-md-down">{{ Auth::user()->name }}
                                    &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="nav-item">
                                        <a class="nav-link" role="button">
                                            <i class="fas fa-arrow-up"></i>
                                            Profile
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <form method="GET" action="{{ route('logout') }}">
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
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ route('dashboard') }}"
                                aria-expanded="false"><i class="fa fa-tachometer"></i><span
                                    class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" data-toggle="modal" data-target="#exampleModalCenter"
                                aria-expanded="false"><i class="fa-solid fa-box-archive"></i><span
                                    class="hide-menu">Add
                                    Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.cat.home') }}"
                                aria-expanded="false">
                                <i class="fa-solid fa-folder-tree"></i><span class="hide-menu">Categories</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('admin.cat.add') }}" method="POST" enctype="multipart/form-data"
                        class="p-5">
                        @csrf
                        <div class="form-group">
                            <label for="name_en">Name : </label>
                            <input type="text" name="name_en" class="form-control" id="name_en"
                                aria-describedby="category_name">
                        </div>
                        <div class="form-group">
                            <label for="name_ar">Name Arabic : </label>
                            <input type="text" name="name_ar" class="form-control" id="name_ar"
                                aria-describedby="category_name">
                        </div>
                        <div class="d-flex mt-3" style="justify-content: space-around">
                            <textarea class="form-control col-5" placeholder="description english" name="desc_en" id="desc_en" cols="30"
                                rows="10"></textarea>
                            <textarea class="form-control col-5" placeholder="description arabic" name="desc_ar" id="desc_ar" cols="30"
                                rows="10"></textarea>
                        </div>

                        <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Image</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>



        @yield('Admin-Contain')


        <footer class="footer"> © Mikro by <a href="https://www.yahyabouhsine.ml/">Yahya Bouhsine</a> </footer>
    </div>
    </div>

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
    <script src="{{ asset('Admin/assets') }}/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Admin/js') }}/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('Admin/js') }}/waves.js"></script>
    <script src="{{ asset('Admin/js') }}/sidebarmenu.js"></script>
    <script src="{{ asset('Admin/js') }}/custom.min.js"></script>
    <script src="{{ asset('Admin/assets') }}/node_modules/raphael/raphael-min.js"></script>
    <script src="{{ asset('Admin/assets') }}/node_modules/morrisjs/morris.min.js"></script>
    <script src="{{ asset('Admin/assets') }}/node_modules/d3/d3.min.js"></script>
    <script src="{{ asset('Admin/assets') }}/node_modules/c3-master/c3.min.js"></script>
    <script src="{{ asset('Admin/js') }}/dashboard1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

    <script>
        var page_data = {{ Js::from($page_data) }};
        var acc_data = {{ Js::from($acc_data) }};

    </script>
</body>

</html>
