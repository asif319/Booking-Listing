@extends('user.layouts.master')
@section('title', 'Home')

@section('home')

    @if(session('regSuc'))
    <div class="notification success closeable">
        <p><span>Success!</span> {{ session('regSuc') }}.</p>
        <a class="close" href="#"></a>
    </div>
    @endif
    <div class="main-search-container" data-background-image="images/main-search-background-01.jpg">
        <div class="main-search-inner">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Find Nearby Attractions</h2>
                        <h4>Expolore top-rated attractions, activities and more</h4>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-top-75">
                    Popular Restaurants
                    <span>Browse <i>the most desirable</i> categories</span>
                </h3>
            </div>

        </div>
    </div>

    <div class="fullwidth-carousel-container margin-top-25">

        <div class="fullwidth-slick-carousel category-carousel">

            <!-- Item -->
            <!-- Item -->
            @foreach($listings as $listing)
            <div class="fw-carousel-item">
                <div class="category-box-container">
                    <a href="{{ route('user.listing', $listing->id) }}" class="category-box" data-background-image="{{ asset('photos/'.$listing->image) }}">
                        <div class="category-box-content">
                            <h3>{{ $listing->title }}</h3>
                            <span>{{ $listing->category }}</span>
                        </div>
                        <a href="{{ route('user.listing', $listing->id) }}"><span class="category-box-btn">Browse</span></a>
                    </a>
                </div>
            </div>
        @endforeach
            <!-- Item -->


            <!-- Item -->


            <!-- Item -->


        </div>

    </div>
    @endsection
