@extends('layouts.FrontLayout')
@section('Front-Contain')
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5" data-aos="fade-right">
            @if (Auth::user())
                <h1 class="headline">Welcome <span class="home_text">{{ Auth::user()->name }}</span><br>Connect With The
                    World</h1>
                <p class="para para-light py-3">Mikro helps you share your timeline and see other people's time line .You
                    not gonna be alone anymore because Mikro is here</p>
                <div class="d-flex align-items-center">
                    <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
                    <p>Connect From Your Home.</p>
                </div>
                <div class="d-flex align-items-center">
                    <p class="p-2"><i class="fas fa-wifi fa-lg"></i></p>
                    <p>Only Internet Needed To Start Connecting.</p>
                </div>
                <div class="my-3">
                    <a class="btn" href="#plans">GET STARTED</a>
                </div>
            @else
                <h1 class="headline">Welcome To <span class="home_text">Mikro</span><br>Connect With The World</h1>
                <p class="para para-light py-3">Mikro helps you share your timeline and see other people's time line .You
                    not gonna be alone anymore because Mikro is here</p>
                <div class="d-flex align-items-center">
                    <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
                    <p>Connect From Your Home.</p>
                </div>
                <div class="d-flex align-items-center">
                    <p class="p-2"><i class="fas fa-wifi fa-lg"></i></p>
                    <p>Only Internet Needed To Start Connecting.</p>
                </div>
                <div class="my-3">
                    <a class="btn" href="#plans">GET STARTED</a>
                </div>
            @endif

        </div>
    </section>


    <section class="information">
        <div class="container-fluid">
            <div class="row text-light">
                <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                    <i class="fas fa-tachometer-alt fa-3x p-2"></i>
                    <h4 class="py-3">120% Faster Application</h4>
                    <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur
                        doloribus natus in suscipit!</p>
                </div>
                <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                    <i class="fas fa-clock fa-3x p-2"></i>
                    <h4 class="py-3">99% Internet Uptime</h4>
                    <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur
                        doloribus natus in suscipit!</p>
                </div>
                <div class="col-lg-4 text-center p-5 text-dark" data-aos="zoom-in">
                    <i class="fas fa-headset fa-3x p-2"></i>
                    <h4 class="py-3">24/7 Support </h4>
                    <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur
                        doloribus natus in suscipit!</p>
                </div>
            </div>
        </div>
    </section>


    @if (Auth::user())
        <div id="createPost" class="modal">

            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Create New Mikro Post</p>
                <form action="{{ route('front.post.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="number" name="post_to_cat" id="post_to_cat" value="{{ Auth::user()->id }}">
                    <br>
                    <input type="text" name="name" placeholder="Name Your Post" id="name">
                    <br>
                    <input type="text" name="description" placeholder="Describe Your Post" id="description">
                    <br>
                    <input type="file" name="image" id="image">
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-secondary">CREATE !</button>
                </form>
            </div>

        </div>

        <section class="work d-flex align-items-center py-5" style="height: 100%" id="posts">
            <div class="container-fluid text-light">
                <h1 style="text-align: center" class="py-2">Explore unlimited posts</h1>
                <button id="createPostBtn"
                    class="btn btn-primary"style="left: 50%;position: relative;translate: -50%;margin-bottom : 20px">Create
                    New Post</button>

                <script>
                    var modal = document.getElementById("createPost");
                    var btn = document.getElementById("createPostBtn");
                    var span = document.getElementsByClassName("close")[0];
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }
                    span.onclick = function() {
                        modal.style.display = "none";
                    }
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>


                @foreach ($posts as $post)
                    <a href="{{ URL('/post/' . $post->id) }}">
                        <div class="row mb-5" id="{{ $post->id }}">
                            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                                <img class="img-fluid"
                                    style="height: 38vh;
                            width: 100%;
                            object-fit: cover;"
                                    src="{{ asset('upload/posts') }}/{{ $post->image }}" alt="{{ $post->name }}">
                            </div>
                            <div class="col-lg-5 d-flex align-items-center px-4 py-3" data-aos="">
                                <div class="row">
                                    <div class="text-center text-lg-start py-4 pt-lg-0">
                                        <h2>{{ $post->name }}</h2>
                                        <p class="para-light">{{ $post->description }}</p>
                                    </div>
                                    <div class="container" data-aos="fade-up">
                                        <div class="row g-5">
                                            <div class="col-6 text-start">
                                                <i class="fas fa-eye fa-2x text-center"></i>
                                                <h2 class="purecounter" data-purecounter-start="0"
                                                    data-purecounter-end="{{ $post->views }}"
                                                    data-purecounter-duration="3">1
                                                </h2>
                                                <p>VIEWS</p>
                                            </div>
                                            <div class="col-6">
                                                <i class="fas fa-thumbs-up fa-2x"></i>
                                                <h2 class="purecounter" data-purecounter-start="0"
                                                    data-purecounter-end="{{ $post->likes }}"
                                                    data-purecounter-duration="3">
                                                    1
                                                </h2>
                                                <p>LIKES</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <hr style="background-color: rgba(255, 255, 255, 0.363)">
                @endforeach
            </div>
        </section>
    @else
        <section class="services d-flex align-items-center py-5" id="services">
            <div class="container text-light">
                <div class="text-center pb-4">
                    <p>OUR SERVICES</p>
                    <h2 class="py-2">Explore unlimited possibilities</h2>
                    <p class="para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae asperiores, quia
                        accusantium sunt corporis optio recusandae? Nostrum libero pariatur cumque, ipsa dolores
                        voluptatibus
                        voluptate alias sit fuga. Itaque, ea quo.</p>
                </div>
                <div class="row gy-4 py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-home fa-2x"></i>
                            <h4 class="py-2">HOME BROADBAND</h4>
                            <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                                consequatur doloribus natus in suscipit!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-wifi fa-2x"></i>
                            <h4 class="py-2"> HOME WIFI</h4>
                            <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                                consequatur doloribus natus in suscipit!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-phone fa-2x"></i>
                            <h4 class="py-2">HOME BROADBAND</h4>
                            <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                                consequatur doloribus natus in suscipit!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-mobile fa-2x"></i>
                            <h4 class="py-2">MOBILE CONNECTION</h4>
                            <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                                consequatur doloribus natus in suscipit!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-home fa-2x"></i>
                            <h4 class="py-2">SECURITY</h4>
                            <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                                consequatur doloribus natus in suscipit!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-transparent">
                            <i class="fas fa-tv fa-2x"></i>
                            <h4 class="py-2">TV SETUP BOX</h4>
                            <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit
                                consequatur doloribus natus in suscipit!</p>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div>
        </section>

        <section class="work d-flex align-items-center py-5">
            <div class="container-fluid text-light">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                        <img class="img-fluid" src="{{ asset('Front/assets') }}/images/work.jpg" alt="work">
                    </div>
                    <div class="col-lg-5 d-flex align-items-center px-4 py-3" data-aos="">
                        <div class="row">
                            <div class="text-center text-lg-start py-4 pt-lg-0">
                                <p>OUR WORK</p>
                                <h2 class="py-2">Explore unlimited possibilities</h2>
                                <p class="para-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos
                                    dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.</p>
                            </div>
                            <div class="container" data-aos="fade-up">
                                <div class="row g-5">
                                    <div class="col-6 text-start">
                                        <i class="fas fa-briefcase fa-2x text-start"></i>
                                        <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1258"
                                            data-purecounter-duration="3">1</h2>
                                        <p>PROJECTS COMPLETED</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fas fa-award fa-2x"></i>
                                        <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="150"
                                            data-purecounter-duration="3">1</h2>
                                        <p>AWARDS</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fas fa-users fa-2x"></i>
                                        <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1255"
                                            data-purecounter-duration="3">1</h2>
                                        <p>CUSTOMER ACTIVE</p>
                                    </div>
                                    <div class="col-6">
                                        <i class="fas fa-clock fa-2x"></i>
                                        <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1157"
                                            data-purecounter-duration="3">1</h2>
                                        <p>GOOD REVIEWS</p>
                                    </div>
                                </div>
                            </div> <!-- end of container -->
                        </div> <!-- end of row -->
                    </div> <!-- end of col-lg-5 -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>

        <section class="contact d-flex align-items-center py-5" id="contact">
            <div class="container-fluid text-light">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5"
                        data-aos="fade-right">
                        <div style="width:90%">
                            <div class="text-center text-lg-start py-4 pt-lg-0">
                                <p>CONTACT</p>
                                <h2 class="py-2">Send your query</h2>
                                <p class="para-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos
                                    dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.</p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group py-2">
                                            <input type="text" class="form-control form-control-input"
                                                id="exampleFormControlInput1" placeholder="Enter name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group py-2">
                                            <input type="email" class="form-control form-control-input"
                                                id="exampleFormControlInput2" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group py-1">
                                    <input type="email" class="form-control form-control-input"
                                        id="exampleFormControlInput3" placeholder="Enter email">
                                </div>
                                <div class="form-group py-2">
                                    <textarea class="form-control form-control-input" id="exampleFormControlTextarea1" rows="6"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="my-3">
                                <a class="btn form-control-submit-button" href="#your-link">Submit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                        <img class="img-fluid d-none d-lg-block" src="{{ asset('Front/assets') }}/images/contact.jpg"
                            alt="contact">
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
