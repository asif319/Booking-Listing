<!-- Left Side Content -->
<div class="left-side">

    <!-- Logo -->
    <div id="logo">
        <a href="{{ route('admin') }}"><img src="{{ asset('images/asif.png') }}" alt=""></a>
        <a href="{{ route('admin') }}" class="dashboard-logo"><img src="{{ asset('images/asif.png') }}" alt=""></a>
    </div>

    <!-- Mobile Navigation -->
    <div class="mmenu-trigger">
        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
        </button>
    </div>

    <!-- Main Navigation -->
    <nav id="navigation" class="style-1">

        <ul id="responsive">

            <li><a href="{{ route('home') }}">Home</a></li>

            @if(Auth::guard('admin')->check())
                <li><a href="{{ route('user.listing.all') }}">Listings</a></li>
            @endif
        </ul>

    </nav>

    <div class="clearfix"></div>
    <!-- Main Navigation / End -->

</div>
<!-- Left Side Content / End -->

<!-- Right Side Content / End -->
@if(Auth::guard('admin')->check())
<div class="right-side">
    <!-- Header Widget -->
    <div class="header-widget">

        <!-- User Menu -->


    </div>
    <!-- Header Widget / End -->
</div>
@endif
<!-- Right Side Content / End -->


