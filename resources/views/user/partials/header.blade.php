<div class="left-side">

    <!-- Logo -->
    <div id="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
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

            <li><a href="#">Listings</a>
                <ul>
                    <li><a href="#">List Layout</a>
                        <ul>
                            <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
                            <li><a href="listings-list-full-width.html">Full Width</a></li>
                            <li><a href="listings-list-full-width-with-map.html">Full Width + Map</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Grid Layout</a>
                        <ul>
                            <li><a href="listings-grid-with-sidebar-1.html">With Sidebar 1</a></li>
                            <li><a href="listings-grid-with-sidebar-2.html">With Sidebar 2</a></li>
                            <li><a href="listings-grid-full-width.html">Full Width</a></li>
                            <li><a href="listings-grid-full-width-with-map.html">Full Width + Map</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Half Screen Map</a>
                        <ul>
                            <li><a href="listings-half-screen-map-list.html">List Layout</a></li>
                            <li><a href="listings-half-screen-map-grid-1.html">Grid Layout 1</a></li>
                            <li><a href="listings-half-screen-map-grid-2.html">Grid Layout 2</a></li>
                        </ul>
                    </li>
                    <li><a href="listings-single-page.html">Single Listing</a></li>
                </ul>
            </li>

            <li><a href="#">User Panel</a>
                <ul>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="dashboard-messages.html">Messages</a></li>
                    <li><a href="dashboard-bookings.html">Bookings</a></li>
                    <li><a href="dashboard-my-listings.html">My Listings</a></li>
                    <li><a href="dashboard-reviews.html">Reviews</a></li>
                    <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                    <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                    <li><a href="dashboard-my-profile.html">My Profile</a></li>
                    <li><a href="dashboard-invoice.html">Invoice</a></li>
                </ul>
            </li>

            <li><a href="#">Pages</a>
                <div class="mega-menu mobile-styles three-columns">

                    <div class="mega-menu-section">
                        <ul>
                            <li class="mega-menu-headline">Pages #1</li>
                            @if(Auth::check())
                            <li><a href="{{ route('user.profile', Auth::id()) }}"><i class="sl sl-icon-user"></i> User Profile</a></li>
                            <li><a href="{{ route('user.addListing', Auth::id()) }}"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                            @endif
                            <li><a href="pages-booking.html"><i class="sl sl-icon-check"></i> Booking Page</a></li>
                            <li><a href="pages-blog.html"><i class="sl sl-icon-docs"></i> Blog</a></li>
                        </ul>
                    </div>

                    <div class="mega-menu-section">
                        <ul>
                            <li class="mega-menu-headline">Pages #2</li>
                            <li><a href="pages-contact.html"><i class="sl sl-icon-envelope-open"></i> Contact</a></li>
                            <li><a href="pages-coming-soon.html"><i class="sl sl-icon-hourglass"></i> Coming Soon</a></li>
                            <li><a href="pages-404.html"><i class="sl sl-icon-close"></i> 404 Page</a></li>
                            <li><a href="pages-masonry-filtering.html"><i class="sl sl-icon-equalizer"></i> Masonry Filtering</a></li>
                        </ul>
                    </div>

                    <div class="mega-menu-section">
                        <ul>
                            <li class="mega-menu-headline">Other</li>
                            <li><a href="pages-elements.html"><i class="sl sl-icon-settings"></i> Elements</a></li>
                            <li><a href="pages-pricing-tables.html"><i class="sl sl-icon-tag"></i> Pricing Tables</a></li>
                            <li><a href="pages-typography.html"><i class="sl sl-icon-pencil"></i> Typography</a></li>
                            <li><a href="pages-icons.html"><i class="sl sl-icon-diamond"></i> Icons</a></li>
                        </ul>
                    </div>

                </div>
            </li>
<li><a href="{{ route('admin.login.show') }}" >Admin</a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>
    <!-- Main Navigation / End -->

</div>
<div class="right-side">
    <div class="">


        @if(Auth::check())
        <div class="user-menu">
            <div class="user-name"><span><img src="{{ asset('images/dashboard-avatar.jpg') }}" alt=""></span>My Account</div>
            <ul>
                <li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                <li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
                <li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Change Password</a></li>
                <li><a href="{{ route('user.logout') }}"><i class="sl sl-icon-power"></i> Logout</a></li>
            </ul>
        </div>

        <a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>


        @else
            <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim" style="padding-left: 200px"><i class="sl sl-icon-login"></i> Sign In</a>
            @endif
    </div>
</div>
