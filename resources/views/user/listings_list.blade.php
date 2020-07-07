@extends('user.layouts.master')
@section('title', 'Listing')

@section('listings_all')

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Listings</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- Listing Item -->
                    @foreach($listings as $listing)
                    <div class="col-lg-12 col-md-12">
                        <div class="listing-item-container list-layout">
                            <a href="{{ route('user.listing', $listing->id) }}" class="listing-item">

                                <!-- Image -->
                                <div class="listing-item-image">
                                    <img src="{{ asset('photos/'.$listing->image) }}" alt="">
                                    <span class="tag">{{ $listing->category }}</span>
                                </div>

                                <!-- Content -->
                                <div class="listing-item-content">
                                    <div class="listing-badge now-open">Now Open</div>

                                    <div class="listing-item-inner">
                                        <h3>{{ $listing->title }} <i class="verified-icon"></i></h3>
                                        <span>{{ $listing->address }} {{ $listing->state }}, {{ $listing->city }}</span>
{{--                                        <div class="star-rating" data-rating="5.0">--}}
{{--                                            <div class="rating-counter">(31 reviews)</div>--}}
{{--                                        </div>--}}
                                    </div>

                                    <span class="like-icon"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!-- Listing Item / End -->

                </div>

                <!-- Pagination -->
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Pagination -->
                        <div class="pagination-container margin-top-20 margin-bottom-40">
                            <nav class="pagination">
                                <ul>
                                    {{ $listings->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Pagination / End -->

            </div>

        </div>
    </div>
    @endsection
