@extends('landingpage.layouts.app')
@section('content')
    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="">Home</a> » <span class="breadcrumb_last" aria-current="page">Anime</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->
    <!--/genre -->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">All Anime</h3>
                        </div>
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    @foreach ($anime as $anime)
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
    
@endsection
