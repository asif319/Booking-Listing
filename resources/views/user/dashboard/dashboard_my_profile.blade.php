@extends('user.layouts.dashboard_master')
@section('title', 'My Profile')

@section('my_profile')
    <div class="dashboard-content">
        @if(session('proSuc'))
            <div class="notification success closeable">
                <p><span>Success!</span> {{ session('proSuc') }}.</p>
                <a class="close" href="#"></a>
            </div>
    @endif
        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>My Profile</h2>
                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Profile -->
            <div class="col-lg-6 col-md-12">
                <div class="dashboard-list-box margin-top-0">
                    <a href="{{ route('user.profile', Auth::id()) }}"><h4 class="gray">See Profile Details</h4></a>
                    <div class="dashboard-list-box-static">

                        <!-- Avatar -->
                        <div class="edit-profile-photo">
                            <img src="{{ asset('photos/'.$profile->image) }}" alt="">
                        </div>

                        <!-- Details -->
                        <div class="my-profile">

                            <label>Your Name</label>
                            <input value="{{ $profile->full_name }}" type="text" readonly>

                            <label>Phone</label>
                            <input value="{{ $profile->number }}" type="text" readonly>

                            <label>Email</label>
                            <input value="{{ $user->email }}" type="text" readonly>

                        </div>

                        <a href="{{ route('user.dashboard.profile-update', Auth::id()) }}"><button class="button margin-top-15">Edit Profile</button></a>

                    </div>
                </div>
            </div>

            <!-- Change Password -->
            <div class="col-lg-6 col-md-12">
                <div class="dashboard-list-box margin-top-0">
                    <h4 class="gray">Change Password</h4>
                    <div class="dashboard-list-box-static">

                        <!-- Change Password -->
                        @include('error.error')
                        <form action="{{ route('user.password.change') }}" method="POST" class="login">
                            {{ csrf_field() }}
                        <div class="my-profile">
                            <label class="margin-top-0">Current Password</label>
                            <input type="password" name="oldpassword">

                            <label>New Password</label>
                            <input type="password" name="password">

                            <label>Confirm New Password</label>
                            <input type="password" name="password_confirmation">

                            <input type="submit" class="button margin-top-15" name="submit" value="Change Password" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
            </div>

        </div>

    </div>
    @endsection
