@extends('user.layouts.master')
@section('title', 'Booking Confirmation')

@section('booking_confirmation')
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Booking Processed</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="booking-confirmation-page">
                    <i class="fa fa-check-circle"></i>
                    <h2 class="margin-top-30">Thanks {{ $client->name }} for your booking!</h2>
                    <p>You'll receive a confirmation email at {{ $client->email }}</p>
                    <a href="dashboard-invoice.html" class="button margin-top-30">View Invoice</a>
                </div>

            </div>
        </div>
    </div>
    @endsection
