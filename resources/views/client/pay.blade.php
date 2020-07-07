@extends('user.layouts.master')
@section('title', 'Booking')

@section('pay')
<div style="background-color: #3bc1ed">
<h4 style="text-align: center">Stripe Payment</h4>
</div>
<div class="col-lg-8 col-md-8 padding-left-100 padding-top-50 ">



<form accept-charset="UTF-8" action="{{ route('booking.pay', [$booking->id, $client->id]) }}" class="require-validation"
      data-cc-on-file="false"
      data-stripe-publishable-key="pk_test_4eL0gOPZtELqtnR48iDFBrOa00P0fy6EOx"
      id="payment-form" method="post">
    {{ csrf_field() }}
    <div class='form-row'>
        <div class='col-xs-12 form-group required'>
            <label class='control-label'>Name on Card</label> <input
                class='form-control' size='4' type='text'>
        </div>
    </div>
    <div class='form-row'>
        <div class='col-xs-12 form-group card required'>
            <label class='control-label'>Card Number</label> <input
                autocomplete='off' class='form-control card-number' size='20'
                type='text' name="card_num">
        </div>
    </div>
    <div class='form-row'>
        <div class='col-xs-4 form-group cvc required'>
            <label class='control-label'>CVC</label> <input autocomplete='off' name="cvc"
                                                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                            type='text'>
        </div>
        <div class='col-xs-4 form-group expiration required'>
            <label class='control-label'>Expiration</label> <input
                class='form-control card-expiry-month' placeholder='MM' size='2'
                type='text' name="e_m">
        </div>
        <div class='col-xs-4 form-group expiration required'>
            <label class='control-label'> </label> <input
                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                type='text' name="e_y">
        </div>
    </div>
    <div class='form-row' >
        <div class='col-md-12' style="background-color: #3bc1ed">
            <div class='form-control total btn btn-info' >
                Total: <span class='amount' >${{ $booking->qtyInput * 10}}</span>
            </div>
        </div>
    </div>
    <div class='form-row'>
        <div class='col-md-12 form-group'>
            <input class='form-control btn btn-primary submit-button'
                   type='submit' style="margin-top: 10px;" name="pay"/>
        </div>
    </div>
    <div class='form-row'>
        <div class='col-md-12 error form-group hide'>
            <div class='alert-danger alert'>Please correct the errors and try
                again.</div>
        </div>
    </div>
</form>
</div>
@endsection

