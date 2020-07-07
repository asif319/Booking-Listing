@extends('user.layouts.master')

@section('title', 'Profile')

@section('client_profile')
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="user-profile-titlebar">
                        <div class="user-profile-avatar"><img src="{{ asset('photos/'.$client->image) }}" alt=""></div>
                        <div class="user-profile-name">
                            <h2>{{ $client->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row sticky-wrapper">


            <!-- Sidebar
            ================================================== -->
            <div class="col-lg-4 col-md-4 margin-top-0">

                @if($client->id == Auth::guard('client')->id())
                    <a href="{{ route('client.show.addInfo', $client->id) }}">
                        <div class="verified-badge with-tip" data-tip-content="Please Update Your Profile">
                            Not Updated?
                        </div>
                    </a>
            @endif
            <!-- Contact -->
                <div class="boxed-widget margin-top-30 margin-bottom-50">
                    <h3>Contact</h3>
                    <ul class="listing-details-sidebar">
                        <li><i class="sl sl-icon-phone"></i> <b>{{ $client->full_name }}</b></li>
                        <li><i class="sl sl-icon-phone"></i> {{ $client->number }}</li>
                        <li><i class="fa fa-envelope-o"></i> <a href="#">{{ $client->email }}</a></li>
                    </ul>
                </div>
                <!-- Contact / End-->
            </div>
            <!-- Sidebar / End -->
            <!-- Content
            ================================================== -->

            <div class="col-lg-8 col-md-8 padding-left-30">


                <h3 class="margin-top-0 margin-bottom-40">{{ $client->name }}'s Bookings</h3>

                <!-- Listings Container -->
                <div class="row">

                    <!-- Listing Item -->
                    @foreach($booking as $bookings)
                        <div class="col-lg-12 col-md-12">
                            <div class="listing-item-container list-layout">
                                @php
                                    $lid = $bookings->listing_id;
                                $listing = \App\Listing::find($lid);
                                @endphp
                                <a href="#" class="listing-item">
                                    <!-- Image -->
                                    <div class="listing-item-image">
                                        <img src="{{ asset('photos/'.$listing->image) }}" alt="">
                                        <span class="tag">{{ $listing->title }}</span>
                                    </div>

                                    <!-- Content -->
                                    <div class="listing-item-content">
                                        <div class="listing-item-inner">
                                            <div class="approved-booking">
                                                <div class="list-box-listing bookings">
                                                <div class="inner">
                                                <h3><i class="fa fa-calendar-check-o"></i> Booking
                                                    Summary @if($bookings->approve == 1) <span
                                                        class="booking-status">Approved</span>
                                                    @elseif($bookings->approve == 2)
                                                        <span class="booking-status">Canceled</span>
                                                    @else
                                                        <span class="booking-status pending">Pending</span>
                                                    @endif
                                                </h3>
                                                Date - <span>{{ $bookings->booking_date }}</span><br>
                                                Hour - <span>{{ $bookings->booking_time }}</span></li><br>
                                                @if($bookings->qtyInput > 1) Guests @else Guest @endif -
                                                <span>{{ $bookings->qtyInput }}</span></li><br>
                                                Place - <span>{{ $listing->city . " " . $listing->address }}</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                @endforeach

                <!-- Listing Item / End -->
                </div>
                <!-- Listings Container / End -->

                <div class="pagination-container margin-top-30">
                    <nav class="pagination">
                        <ul>
                            {{--                            <li><a href="#" class="current-page">1</a></li>--}}
                            {{--                            {{ $listing->links() }}--}}
                            {{--                            <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>--}}
                        </ul>
                    </nav>
                </div>

                <!-- Reviews -->


            </div>

        </div>
    </div>



@endsection

