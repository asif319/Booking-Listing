@extends('admin.layouts.master')

@section('all_profile')
    <div class="dashboard-content">
        @if(session('delSuc'))
            <div class="notification success closeable">
                <p><span>Success!</span> {{ session('delSuc') }}</p>
                <a class="close" href="#"></a>
            </div>
    @endif
        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Profile</h2>
                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Listings -->
            <div class="col-lg-12 col-md-12">
                <div class="dashboard-list-box margin-top-0">
                    <h4>Active Profiles</h4>


                        @php
                            $users = \App\User::latest()->get();
                                foreach($users as $user)
                                {
                                $profiles = \App\User::find($user->id)->profile;

                            @endphp
                    <ul>
                        <li>
                            <div class="list-box-listing">
                                <div class="list-box-listing-img"><a href="{{ route('user.profile', $user->id) }}">
                                        <img src=" @php

                                                echo asset('photos/'.$profiles->image);

                                        @endphp" alt="">

                                    </a></div>
                                <div class="list-box-listing-content">
                                    <div class="inner">
                                        <h3><a href="{{ route('user.profile', $user->id) }}">{{ $user->name }}</a></h3>
                                        <span>{{ $user->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons-to-right">
                                <a href="{{ route('admin.user.delete', $user->id) }}" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
                            </div>
                        </li>

                    </ul>
@php

                        }
                        @endphp

                </div>
            </div>


            <!-- Copyrights -->
            @include('admin/partials/footer')
        </div>

    </div>

    @endsection
