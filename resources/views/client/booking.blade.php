@extends('user.layouts.master')
@section('title', 'Booking')

@section('booking')
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Booking</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <div class="row">

            <!-- Content
            ================================================== -->
            <!-- Sidebar
            ================================================== -->
            <div class="col-lg-8 col-md-8 padding-right-30 center">

                <!-- Booking Summary -->
                <div class="listing-item-container compact order-summary-widget">
                    <div class="listing-item">
                        <img src="{{ asset('photos/'.$listing->image) }}" alt="">

                        <div class="listing-item-content">
                            <h3>{{ $listing->title }}</h3>
                            <span>{{ $listing->address }}, {{ $listing->state }}</span>
                        </div>
                    </div>
                </div>
                <div class="boxed-widget opening-hours summary margin-top-0">
                    <h3><i class="fa fa-calendar-check-o"></i> Booking Summary</h3>
                    <ul>
                        <li>Name <span>{{ $client->full_name }}</span></li>
                        <li>Email <span>{{ $client->email }}</span></li>
                        <li>Phone Number <span>{{ $client->number }}</span></li>
                        <li>Date <span>{{ $booking->booking_date }}</span></li>
                        <li>Hour <span>{{ $booking->booking_time }}</span></li>
                        <li>Guests <span>{{ $booking->qtyInput }}</span></li>
                        <li class="total-costs">Total Cost <span>${{ $booking->qtyInput * 10}}</span></li>
                    </ul>

                </div>
                <!-- Booking Summary / End -->
                <br>
                <h3 class="margin-top-55 margin-bottom-30">Payment Method</h3>

                <!-- Payment Methods Accordion -->
                <div class="payment">

                    <div class="payment-tab payment-tab-active">
                        <div class="payment-tab-trigger">
                            <input checked id="paypal" name="cardType" type="radio" value="paypal">
                            <label for="paypal">Stripe</label>
                            <img class="payment-logo paypal" src="{{ asset('photos/stripe.png') }}" alt="">
                        </div>

                        <div class="payment-tab-content">
                            <p>You will be redirected to Stripe to complete payment.</p>
                        </div>
                    </div>




                </div>
                <!-- Payment Methods Accordion / End -->

                <a href="{{ route('booking.pay.view', [$booking->id, $client->id]) }}" class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Proceed to Pay</a>
            </div>

        </div>
    </div>
    <!-- Container / End -->
    @endsection
