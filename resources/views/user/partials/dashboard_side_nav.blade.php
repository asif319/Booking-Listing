
<div class="dashboard-nav">
    <div class="dashboard-nav-inner">
        @if(Auth::id())
            @php
            $message = \App\User::find(Auth::id())->messages;
            $listing = \App\User::find(Auth::id())->listings;
            @endphp
            <ul data-submenu-title="Main">
                <li class="active"><a href="{{ route('dashboard') }}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                <li><a href="{{ route('user.message', Auth::id()) }}"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">{{ count($message) }}</span></a></li>
                <li><a href="{{ route('booking', Auth::id()) }}"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
            </ul>

            <ul data-submenu-title="Listings">
                <li><a href="{{ route('user.dashboard.listing', Auth::id()) }}"><i class="sl sl-icon-layers"></i> My Listings <span class="nav-tag green">{{ count($listing) }}</span></a></li>
                <li><a href="{{ route('user.dashboard.review', Auth::id()) }}"><i class="sl sl-icon-star"></i> Reviews</a></li>
                <li><a href="{{ route('user.dashboard.add-listing') }}"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
            </ul>

            <ul data-submenu-title="Account">
                <li><a href="{{ route('user.dashboard.profile', Auth::id()) }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                <li><a href="{{ route('user.logout') }}"><i class="sl sl-icon-power"></i> Logout</a></li>
            </ul>
            @endif
    </div>
</div>

