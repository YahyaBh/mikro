<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Socail Media">
    <meta name="author" content="Mikro">

    <title>Mirko </title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ asset('Front/css') }}/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('Front/css') }}/fontawesome-all.min.css" rel="stylesheet">
    <link href="{{ asset('Front/css') }}/aos.min.css" rel="stylesheet">
    <link href="{{ asset('Front/css') }}/swiper.css" rel="stylesheet">
    <link href="{{ asset('Front/css') }}/style.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('Front/assets') }}/images/favicon.png">
</head>

<body>

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <a class="navbar-brand logo-text" href="{{ url('/') }}">MIKRO</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#posts">Posts</a>
                    </li>

                    @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">{{ Auth::user()->name }}</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown01">

                                <li>
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('profile.show') }}">
                                        <i class="fas fa-sign-out-alt"></i>

                                        Profile
                                    </a>
                                </li>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
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
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endif

                </ul>

            </div>
        </div>
    </nav>



    @yield('Front-Contain')

    <section class="footer text-light">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4 class="">Mirko</h4>
                    </div>
                    <p class="py-3 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi
                        repudiandae explicabo esse maxime, impedit rem voluptatibus amet error quas.</p>
                    <div class="d-flex">
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-facebook-f fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-twitter fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-instagram fa-2x py-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Quick Links</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#about">
                                <p class="ms-3">About</p>
                            </a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">
                                <p class="ms-3">Services</p>
                            </a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">
                                <p class="ms-3">Contact</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Useful Links</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="privacy.html">
                                <p class="ms-3">Privacy</p>
                            </a>

                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="terms.html">
                                <p class="ms-3">Terms</p>
                            </a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link">
                                <p class="ms-3">Disclaimer</p>
                            </a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link">
                                <p class="ms-3">FAQ</p>
                            </a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4>Newsletter</h4>
                    </div>
                    <p class="py-3 para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam,
                        ab.</p>
                    <div class="d-flex align-items-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control p-2" placeholder="Enter Email"
                                aria-label="Recipient's email">
                            <button class="btn-secondary text-light"><i class="fas fa-envelope fa-lg"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bottom py-2 text-light">
        <div class="container d-flex justify-content-between">
            <div>
                <p>Copyright © Mikro</p><br>
                <p>Distributed by: <a href="https://yahyabouhsine.ml/">Yahya Bouhsine</a></p>
            </div>
            <div>
                <i class="fab fa-cc-visa fa-lg p-1"></i>
                <i class="fab fa-cc-mastercard fa-lg p-1"></i>
                <i class="fab fa-cc-paypal fa-lg p-1"></i>
                <i class="fab fa-cc-amazon-pay fa-lg p-1"></i>
            </div>
        </div>
    </div>


    <script src="{{ asset('Front/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('Front/js') }}/purecounter.min.js"></script>
    <script src="{{ asset('Front/js') }}/swiper.min.js"></script>
    <script src="{{ asset('Front/js') }}/aos.js"></script>
    <script src="{{ asset('Front/js') }}/script.js"></script>


</html>
