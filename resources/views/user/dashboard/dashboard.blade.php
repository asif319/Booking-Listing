@extends('user.layouts.dashboard_master')
@section('title', 'Dashboard')

@section('dashboard')
    @php
        $message = \App\User::find(Auth::id())->messages;
    @endphp
    <div class="dashboard-content">

        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $user->name }}!</h2>
                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>

        <!-- Notice -->

        <!-- Content -->
        <div class="row">

            <!-- Item -->
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-stat color-1">
                    <div class="dashboard-stat-content"><h4>{{ count($listing) }}</h4> <span>Active Listings</span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-stat color-2">
                    <div class="dashboard-stat-content"><h4>{{ count($message) }}</h4> <span>Total Messages</span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                </div>
            </div>


            <!-- Item -->
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-stat color-3">
                    <div class="dashboard-stat-content"><h4>{{ $review }}</h4> <span>Total Review</span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-stat color-4">
                    <div class="dashboard-stat-content"><h4>{{ $rating }}</h4> <span>Rating</span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
                </div>
            </div>
        </div>


        <div class="row">

            <!-- Recent Activity -->

            <!-- Invoices -->


            <!-- Copyrights -->

{{--            <div class="col-md-12">--}}
{{--                <div class="copyrights">© 2020 Asif. All Rights Reserved.</div>--}}
{{--            </div>--}}
        </div>
      
    </div>
@endsection
