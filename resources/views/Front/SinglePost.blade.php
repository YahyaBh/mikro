@extends('layouts.FrontLayout')
@section('Front-Contain')
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5" data-aos="fade-right">


            @if (Auth::user())
                <img src="{{ asset('upload/posts') }}/{{ $post->image }}"
                    style="height: 400px;width:70%;object-fit:cover;align-content: center;
                justify-content: center;
                display: flex;
                margin:auto">
                <h1 class="headline">{{ $post->name }}</h1>
                <p class="para para-light py-3">{{ $post->description }}</p>
                <div class="d-flex align-items-center">
                    <p class="p-2"><i class="fas fa-eye fa-lg"></i></p>
                    <p>{{ $post->views }}</p>
                </div>


                @if ($post->isLiked)
                    <a href="{{ URL('post/like/' . $post->id) }}">
                        <div class="d-flex align-items-center">
                            <p class="p-2"><i class="fas fa-thumbs-up fa-lg" style="opacity: 1"></i></p>
                            <p>{{ $likes }}</p>
                        </div>
                    </a>
                @else
                    <a href="{{ URL('post/like/' . $post->id) }}">
                        <div class="d-flex align-items-center">
                            <p class="p-2"><i class="fas fa-thumbs-up fa-lg" style="opacity: .2"></i></p>
                            <p>{{ $likes }}</p>
                        </div>
                    </a>
                @endif

                
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
@endsection
