@extends('landingpage.layouts.app')
@section('content')
    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="/">Home</a>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->
    <!--/genre -->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-4">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <h3 class="hny-title">Popular Anime</h3>
                </div>
                <div class="owl-four owl-carousel owl-theme">
                    @foreach ($limarand as $anime)
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="/anime/{{ $anime->id }}">
                                    <figure>
                                        <img style="height: 300px" class="img-fluid" src="{{ $anime->poster }}"
                                            alt="">
                                    </figure>
                                    <div class="box-content">
                                        <h3 class="title">{{ $anime->title }}</h3>
                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span>
                                                {{ $anime->genres->name }}
                                            </span>
                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Latest Anime</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="/anime">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    @foreach ($latest as $anime)
                        <div class="item vhny-grid">
                            <div class="box16 mb-0">
                                <a href="/anime/{{ $anime->id }}">
                                    <figure>
                                        <img class="img-fluid" src="{{ $anime->poster }}" alt=""
                                            style="height: 400px">
                                    </figure>
                                    <div class="box-content">
                                        <h3 class="title">{{ $anime->title }}</h3>
                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span>
                                                {{ $anime->genres->name }}

                                            </span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->
    <section class="w3l-albums py-2" id="projects">
        <div class="container py-lg-4">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <!--Horizontal Tab-->
                    <div id="parentHorizontalTab">
                        <div class="headerhny-title">
                            <div class="w3l-title-grids">
                                <div class="headerhny-left">
                                    <h3 class="hny-title">Populer Anime</h3>
                                </div>
                            </div>
                        </div>
                        <div class="resp-tabs-container hor_1">
                            <div class="albums-content">
                                <div class="row">
                                    @foreach ($popular as $anime)
                                        <!--/set1-->
                                        <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                            <div class="slider-info">
                                                <div class="img-circle">
                                                    <a href="/anime/{{ $anime->id }}">

                                                        <img src="{{ $anime->poster }}" class="img-fluid"
                                                            alt="author image">
                                                        <div class="overlay-icon">

                                                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="message">
                                                    <p>{{ $anime->countries->name }}</p>
                                                    <a class="author-book-title"
                                                        href="/anime/{{ $anime->id }}">{{ $anime->title }}</a>
                                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span>
                                                            {{ $anime->genres->name }}

                                                        </span>

                                                        <span class="post fa fa-heart text-right"></span>
                                                    </h4>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
