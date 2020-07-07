
<div class="dashboard-nav">
    <div class="dashboard-nav-inner">
        @if(Auth::guard('admin')->check())
        <ul data-submenu-title="Main">
            <li class="active"><a href="{{ route('admin') }}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.user.profile') }}"><i class="sl sl-icon-people"></i> User Profile </a></li>
        </ul>

        <ul data-submenu-title="Listings">
            <li><a href="{{ route('admin.user.listing') }}"><i class="sl sl-icon-layers"></i> All Listings</a></li>
        </ul>

        <ul data-submenu-title="Account">
            <li><a href="{{ route('admin.logout') }}"><i class="sl sl-icon-power"></i> Logout</a></li>
        </ul>
@endif
    </div>
</div>
