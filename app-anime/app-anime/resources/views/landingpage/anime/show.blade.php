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
    <section class="w3l-text-8 genre-single">
        <div class="text-bg-image">
        </div>
        <div class="container py-5">
            <div class="d-grid-1 py-lg-4">
                <div class="text">
                    <h6 class="text-logo">{{ $movies->genres->name }}</h6>
                    <div class="genre-single-page my-lg-5 my-4">
                        <div class="row ab-grids-sec align-items-center">
                            <div class="col-lg-4 gen-right">
                                <a href="#"><img class="img-fluid" src="{{ $movies->poster }}"></a>
                            </div>
                            <div class="col-lg-8 gen-left pl-lg-4 mt-lg-0 mt-5">

                                <h3 class="hny-title">{{ $movies->title }}</h3>
                                <p class="mt-2 text-wrap">{{ $movies->synopsis }}</p>
                                <ul class="admin-post mt-1">
                                    <li>
                                        <a href="#"><span class="fa fa-clock-o"></span>
                                            {{ $movies->release_date }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fa fa-user"></span> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fa fa-heart-o"></span> 50</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fa fa-flag"></span>
                                            {{ $movies->countries->name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w3l-blog-single shadow p-3 rounded comments mt-5">
                        <h3 class="post-content-title">Recent Reviews</h3>
                        @foreach ($movies->reviews as $review)
                            <div class="media mt-5">
                                <div class="img-circle">
                                    <img src="{{ asset('landing_template/assets/images/c1.jpg') }}"
                                        class="mr-3 rounded-circle" alt="...">
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0">{{ $review->users->name }}</h5>
                                    <span class="time">Date : {{ $review->date }} | {{ $review->rating }}
                                        Rating</span>
                                    <p>{{ $review->description }}</p>
                                </div>
                            </div>
                        @endforeach


                        @if (Auth::check())
                        <div class="testi-top mt-5 pt-3">
                            <h3 class="post-content-title">Leave a Reviews</h3>
                            <div class="form-commets mt-5">
                                <form action="/anime" method="post">
                                    @csrf
                                    <div class="media-form">
                                        <input type="text" class="mb-3" name="date" value="{{ date('Y-m-d') }}"
                                            readonly>
                                        <input type="number" class="mb-3" name="rating" min="1" max="5"
                                            placeholder="Rating 1 - 5">
                                        <input type="hidden" name="movies_id" value="{{ $movies->id }}">
                                        {{-- <input type="hidden" name="users_id" value="1"> --}}
                                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                    </div>
                                    <textarea name="description" required="" placeholder="Write your reviewss here"></textarea>
                                    <div class="text-right mt-3">
                                        <button class="btn read-button" type="submit">Post reviews</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @else
                            <p class="mt-3">Please log in to leave a reviews.</p>
                        @endif

                    </div>

                </div>
            </div>
        </div>



    </section>
@endsection
