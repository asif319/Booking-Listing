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
                @include('user.auth.login_register')
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

    @yield('profile')

    @yield('profile-update')

    @yield('add_listing')

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

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="scripts/dropzone.js"></script>


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

