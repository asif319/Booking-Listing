@extends('user.layouts.master')

@section('profile-update')

    <div class="col-lg-12 col-md-12">
        <div class="dashboard-list-box margin-top-0">
            <h4 class="gray">Login</h4>
            <div class="dashboard-list-box-static">

                <!-- Change Password -->
                <div class="my-profile">



                    <form action="{{ route('user.profile.addInfo', Auth::id()) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <label class="margin-top-0">Full Name</label>
                        <input type="text" name="full_name">

                        <label>Number</label>
                        <input type="text" name="number">

                        <label>Profile Picture</label>
                        <input type="file" name="image">


                        <input type="submit" name="submit" value="Submit">

                    </form>

                </div>

            </div>
        </div>
    </div>


    @endsection
