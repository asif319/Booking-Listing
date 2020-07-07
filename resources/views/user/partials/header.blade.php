<div class="left-side">

    <!-- Logo -->
    <div id="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('images/asif.png') }}" alt=""></a>
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

            <li><a class="current" href="{{ route('home') }}">Home</a></li>

            <li><a href="{{ route('user.listing.all') }}">Listings</a></li>


<li><a href="{{ route('admin') }}" >Admin</a></li>
<li><a href="{{ route('dashboard') }}" >User</a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>
    <!-- Main Navigation / End -->

</div>
<div class="right-side">
    <div class="">
        <!-- User -->
        @if(Auth::check())
            <a href="{{ route('user.addListing', Auth::id()) }}" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
        <div class="user-menu">
            <div class="user-name">My Account</div>
            <ul>
                <li><a href="{{ route('user.profile', Auth::id()) }}"><i class="sl sl-icon-user"></i> Profile</a></li>
                <li><a href="{{ route('user.show.password.change') }}"><i class="fa fa-calendar-check-o"></i>Change Password</a></li>
                <li><a href="{{ route('user.logout') }}"><i class="sl sl-icon-power"></i> Logout</a></li>

            </ul>
        </div>
            @endif

    <!-- Client -->
            @if(Auth::guard('client')->check())
                <div class="user-menu">
                    <div class="user-name">My Account</div>
                    <ul>
                        <li><a href="{{ route('client.profile', Auth::guard('client')->id()) }}"><i class="sl sl-icon-user"></i> Profile</a></li>
                        <li><a href="{{ route('client.message', Auth::guard('client')->id()) }}"><i class="sl sl-icon-envelope-open"></i> Inbox</a></li>
                        <li><a href="{{ route('client.logout') }}"><i class="sl sl-icon-power"></i> Logout</a></li>

                    </ul>
                </div>
            @else
                @if(!Auth::id())
            <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim" style="padding-left: 200px"><i class="sl sl-icon-login"></i> Client Sign In</a>
               @endif
                @endif
    </div>
</div>

@if(session('clientRegSuc'))
    <div class="notification success closeable">
        <p><span>Success!</span> {{ session('clientRegSuc') }}.</p>
        <a class="close" href="#"></a>
    </div>
@endif

@if(session('clientLogFail'))
    <div class="notification error closeable">
        <p><span>Error!</span> {{ session('clientLogFail') }}</p>
        <a class="close" href="#"></a>
    </div>
@endif
