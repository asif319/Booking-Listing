@extends('user.layouts.dashboard_master')
@section('title', 'Listing')

@section('listing')
    <div class="dashboard-content">

        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>My Listings</h2>
                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Listings -->
            <div class="col-lg-12 col-md-12">
                <div class="dashboard-list-box margin-top-0">
                    <h4>Active Listings</h4>
                    @foreach($listing as $listings)
                    <ul>
                        <li>
                            <div class="list-box-listing">
                                <div class="list-box-listing-img"><a href="#"><img src="{{ asset('photos/'.$listings->image) }}" alt=""></a></div>
                                <div class="list-box-listing-content">
                                    <div class="inner">
                                        <h3><a href="#">{{ $listings->title }}</a></h3>
                                        <span>{{ $listings->address . " " . $listings->city}}, {{ $listings->state }}</span>
                                        <div class="star-rating"  @if($listings->rating != 0) data-rating="{{ $listings->rating }}" @endif>
                                            <div class="rating-counter">
                                                @if($listings->review_count == null)
                                                    (0 reviews)
                                                    @else
                                                ({{ $listings->review_count }} reviews)
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons-to-right">
                                <a href="{{ route('user.listing.edit.show', $listings->id) }}" class="button gray"><i class="sl sl-icon-note"></i> Edit</a>
                                <a href="{{ route('user.listing.delete', $listings->id) }}" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
                            </div>
                        </li>
                    </ul>
                        @endforeach
                </div>
            </div>


            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
            </div>
        </div>

    </div>
    @endsection
