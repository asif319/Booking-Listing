@extends('user.layouts.dashboard_master')
@section('title', 'Profile Update')

@section('profile_update')
    <div class="dashboard-content">

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
                    <h4 class="gray">Profile Details</h4>
                    <div class="dashboard-list-box-static">

                        @include('error.error')
                        <form action="{{ route('user.profile.addInfo', Auth::id()) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <!-- Avatar -->
                        <div class="edit-profile-photo">
                            <img src="{{ asset('photos/'.$profile->image) }}" alt="">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload" name="image" />
                                </div>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="my-profile">

                            <label>Your Name</label>
                            <input value="{{ $profile->full_name }}" type="text" name="full_name">

                            <label>Phone</label>
                            <input value="{{ $profile->number }}" type="text" name="number">

                        </div>

                            <input type="submit" name="submit" class="button margin-top-15" value="Update">

                        </form>
                    </div>
                </div>
            </div>

            <!-- Change Password -->

            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2020 Asif. All Rights Reserved.</div>
            </div>

        </div>

    </div>
@endsection
