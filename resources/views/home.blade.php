@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- <!-- dummy box -->
    <div style="height: 120px;"></div> --}}
    {{-- @include('users.search') <!-- Include the search form --> --}}

    @if (isset($users))
        @include('users.search_results') <!-- Include the search results -->
    @endif

    <div class="wrapper">
        <!-- start slideshow -->
        <div class="slide-loader">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/img-1.png') }}" class="d-block w-100" alt="IMG-1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/img-2.png') }}" class="d-block w-100" alt="IMG-2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/img-5.png') }}" class="d-block w-100" alt="IMG-2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- end slideshow -->

        <!-- start features -->
        <div class="features">
            <div class="features-item">
                <div class="card feature-card">
                    <div class="card-body body">
                        <div class="row">
                            <div class="col-8 feature-content">
                                <h5 class="card-title">Accuracy</h5>
                                <p class="card-text">The information about IT trusted is here</p>
                            </div>
                            <div class="col-4 feature-image">
                                <img src="{{ asset('img/img-feature-2.jpeg') }}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-item">
                <div class="card feature-card">
                    <div class="card-body body">
                        <div class="row">
                            <div class="col-8 feature-content">
                                <h5 class="card-title">Fast</h5>
                                <p class="card-text">The information always update fastest</p>
                            </div>
                            <div class="col-4 feature-image">
                                <img src="{{ asset('img/img-feature-1.png') }}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-item">
                <div class="card feature-card">
                    <div class="card-body body">
                        <div class="row">
                            <div class="col-8 feature-content">
                                <h5 class="card-title">Community</h5>
                                <p class="card-text">With large community, you can leave your problem here to have the
                                    solution</p>
                            </div>
                            <div class="col-4 feature-image">
                                <img src="{{ asset('img/img-feature-3.gif') }}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end features -->
    </div>

@endsection
