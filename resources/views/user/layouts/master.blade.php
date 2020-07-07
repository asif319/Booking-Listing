<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/main.css') }}" id="colors">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                @include('user.partials.header')
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->

                <!-- Right Side Content / End -->

                <!-- Sign In Popup -->
{{--                @include('user.auth.login_register')--}}

                @include('client.auth.client_login_reg')
                <!-- Sign In Popup / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Banner
    ================================================== -->



    <!-- Content
    ================================================== -->

    @yield('home')

    @yield('profile')

    @yield('profile-update')

    @yield('add_listing')

    @yield('listing')

    @yield('listing_edit')

    @yield('listings_all')

    @yield('booking')

    @yield('client_profile')

    @yield('client_profile_update')

    @yield('pay')

    @yield('booking_confirmation')

    @yield('message')

    @yield('message_details')
    <!-- Categories Carousel -->

    <!-- Categories Carousel / End -->



    <!-- Fullwidth Section -->

    <!-- Fullwidth Section / End -->


    <!-- Info Section -->

    <!-- Info Section / End -->


    <!-- Recent Blog Posts -->
    <!-- Recent Blog Posts / End -->


    <!-- Footer
    ================================================== -->
    @include('user.partials.footer')
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset('scripts/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    $(function() {
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(e.target).closest('form'),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;

            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault(); // cancel on first error
                }
            });
            $form.on('submit', function(e) {
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('pk_test_4eL0gOPZtELqtnR48iDFBrOa00P0fy6EOx'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    });
</script>

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="{{ asset('scripts/dropzone.js') }}"></script>

<!-- Date Picker - docs: http://www.vasterad.com/docs/listeo/#!/date_picker -->
<link href="{{ asset('css/plugins/datedropper.css') }}" rel="stylesheet" type="text/css">
<script src="{{ asset('scripts/datedropper.js') }}"></script>
<script>$('#booking-date').dateDropper();</script>

<!-- Time Picker - docs: http://www.vasterad.com/docs/listeo/#!/time_picker -->
<script src="{{ asset('scripts/timedropper.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/timedropper.css') }}">
<script>
    this.$('#booking-time').timeDropper({
        setCurrentTime: false,
        meridians: true,
        primaryColor: "#f91942",
        borderColor: "#f91942",
        minutesInterval: '15'
    });

    var $clocks = $('.td-input');
    _.each($clocks, function(clock){
        clock.value = null;
    });
</script>

<!-- Booking Widget - Quantity Buttons -->
<script src="{{ asset('scripts/quantityButtons.js') }}"></script>

<script>
    $(".opening-day.js-demo-hours .chosen-select").each(function() {
        $(this).append(''+
            '<option></option>'+
            '<option>Closed</option>'+
            '<option>1 AM</option>'+
            '<option>2 AM</option>'+
            '<option>3 AM</option>'+
            '<option>4 AM</option>'+
            '<option>5 AM</option>'+
            '<option>6 AM</option>'+
            '<option>7 AM</option>'+
            '<option>8 AM</option>'+
            '<option>9 AM</option>'+
            '<option>10 AM</option>'+
            '<option>11 AM</option>'+
            '<option>12 AM</option>'+
            '<option>1 PM</option>'+
            '<option>2 PM</option>'+
            '<option>3 PM</option>'+
            '<option>4 PM</option>'+
            '<option>5 PM</option>'+
            '<option>6 PM</option>'+
            '<option>7 PM</option>'+
            '<option>8 PM</option>'+
            '<option>9 PM</option>'+
            '<option>10 PM</option>'+
            '<option>11 PM</option>'+
            '<option>12 PM</option>');
    });
</script>

<!-- Style Switcher
================================================== -->
<script src="{{ asset('scripts/switcher.js') }}"></script>

<div id="style-switcher">
    <h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>

    <div>
        <ul class="colors" id="color1">
            <li><a href="#" class="main" title="Main"></a></li>
            <li><a href="#" class="blue" title="Blue"></a></li>
            <li><a href="#" class="green" title="Green"></a></li>
            <li><a href="#" class="orange" title="Orange"></a></li>
            <li><a href="#" class="navy" title="Navy"></a></li>
            <li><a href="#" class="yellow" title="Yellow"></a></li>
            <li><a href="#" class="peach" title="Peach"></a></li>
            <li><a href="#" class="beige" title="Beige"></a></li>
            <li><a href="#" class="purple" title="Purple"></a></li>
            <li><a href="#" class="celadon" title="Celadon"></a></li>
            <li><a href="#" class="red" title="Red"></a></li>
            <li><a href="#" class="brown" title="Brown"></a></li>
            <li><a href="#" class="cherry" title="Cherry"></a></li>
            <li><a href="#" class="cyan" title="Cyan"></a></li>
            <li><a href="#" class="gray" title="Gray"></a></li>
            <li><a href="#" class="olive" title="Olive"></a></li>
        </ul>
    </div>

</div>
<!-- Style Switcher / End -->


</body>
</html>

