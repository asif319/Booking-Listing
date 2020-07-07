@extends('user.layouts.dashboard_master')
@section('title', 'Booking')

@section('booking')
    <div class="dashboard-content">

        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>Bookings</h2>
                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>
        @if(session('delSuc'))
            <div class="notification success closeable">
                <p><span>Success!</span> {{ session('delSuc') }}</p>
                <a class="close" href="#"></a>
            </div>
        @endif
        @if(session('approveSuc'))
            <div class="notification success closeable">
                <p><span>Success!</span> {{ session('approveSuc') }}</p>
                <a class="close" href="#"></a>
            </div>
        @endif
        <div class="row">

            <!-- Listings -->
            <div class="col-lg-12 col-md-12">
                <div class="dashboard-list-box margin-top-0">

                    <!-- Sort by -->
                    <div class="sort-by">
                        <div class="sort-by-select">
                            <select data-placeholder="Default order" class="chosen-select-no-single">
                                <option>Any Status</option>
                                <option>Approved</option>
                                <option>Pending</option>
                                <option>Canceled</option>
                            </select>
                        </div>
                    </div>


                    <!-- Reply to review popup -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <div class="small-dialog-header">
                            <h3>Send Message</h3>
                        </div>
                        <div class="message-reply margin-top-0">
                            <textarea cols="40" rows="3" placeholder="Your Message to Kathy"></textarea>
                            <button class="button">Send</button>
                        </div>
                    </div>

                    <h4>Bookings List</h4>
                    @foreach($booking as $bookings)
                        @php
                            $listingId = $bookings->listing_id;
$listing = \App\Listing::find($listingId);

                        $clientId = $bookings->client_id;
                        $client = \App\Client::find($clientId);

                        @endphp
                        <ul>
                            <li class="pending-booking">
                                <div class="list-box-listing bookings">
                                    <div class="list-box-listing-img"><img
                                            src="{{ asset('photos/'.$client->image) }}"
                                            alt=""></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3>{{ $listing->title }}
                                                @if($bookings->approve == 1)
                                                    <span class="booking-status">Approved</span>
                                                @elseif($bookings->approve == 2)
                                                    <span class="booking-status">Canceled</span>
                                                @else
                                                    <span class="booking-status pending">Pending</span>
                                                @endif
                                            </h3>

                                            <div class="inner-booking-list">
                                                <h5>Booking Date:</h5>
                                                <ul class="booking-list">
                                                    <li class="highlighted">{{ $bookings->booking_date }}
                                                        at {{ $bookings->booking_time }}</li>
                                                </ul>
                                            </div>

                                            <div class="inner-booking-list">
                                                <h5>Booking Details:</h5>
                                                <ul class="booking-list">
                                                    <li class="highlighted">{{ $bookings->qtyInput }} People</li>
                                                </ul>
                                            </div>

                                            <div class="inner-booking-list">
                                                <h5>Client:</h5>
                                                <ul class="booking-list">
                                                    <li>{{ $client->full_name }}</li>
                                                    <li>{{ $client->email }}</li>
                                                    <li>{{ $client->number }}</li>
                                                </ul>
                                            </div>

                                            <a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i
                                                    class="sl sl-icon-envelope-open"></i> Send Message</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    @if($bookings->approve != 2)
                                        <a href="{{ route('booking.cancel', $bookings->id) }}"
                                           class="button gray reject"
                                           onclick="return confirm('Are you sure you want to cancel this booking?')"><i
                                                class="sl sl-icon-close"></i> Cancel</a>
                                    @endif
                                    @if($bookings->approve == null)
                                        <a href="{{ route('booking.approve', $bookings->id) }}"
                                           class="button gray approve"><i
                                                class="sl sl-icon-check"></i> Approve</a>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>


            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2020 Asif. All Rights Reserved.</div>
            </div>
        </div>

    </div>
@endsection
