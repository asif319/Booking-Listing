@extends('admin.layouts.master')

@section('all_listings')

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
                    <h2>All Listings</h2>
                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Listings -->
            <div class="col-lg-12 col-md-12">
                <div class="dashboard-list-box margin-top-0">
                    <h4>Listings</h4>
                    @foreach($listing as $listings)
                    <ul>
                        <li>
                            <div class="list-box-listing">
                                <div class="list-box-listing-img"><a href="{{ route('user.listing', $listings->id) }}"><img src="{{ asset('photos/'.$listings->image) }}" alt=""></a></div>
                                <div class="list-box-listing-content">
                                    <div class="inner">
                                        <h3><a href="{{ route('user.listing', $listings->id) }}">{{ $listings->title }}</a></h3>
                                        <span>{{ $listings->address }} {{ $listings->state }}, {{ $listings->city }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons-to-right">
                                <a href="{{ route('admin.listing.delete', $listings->id) }}" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
                            </div>
                        </li>

                    </ul>
                        @endforeach


                </div>
                <div class="pagination-container margin-top-20 margin-bottom-40">
                    <nav class="pagination">
                        <ul>
                            {{ $listing->links() }}
                        </ul>
                    </nav>
                </div>
            </div>



            <!-- Copyrights -->
            @include('admin/partials/footer')
        </div>

    </div>

    @endsection
