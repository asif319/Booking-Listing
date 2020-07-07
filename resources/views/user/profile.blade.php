@extends('user.layouts.master')

@section('title', 'Profile')

@section('profile')
    @if(session('messageSuc'))
        <div class="notification success closeable">
            <p><span>Congrats!</span> {{ session('messageSuc') }}</p>
            <a class="close" href="#"></a>
        </div>
    @endif
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="user-profile-titlebar">
                        <div class="user-profile-avatar"><img src="{{ asset('photos/'.$profile->image) }}" alt=""></div>
                        <div class="user-profile-name">
                            <h2>{{ $user->name }}</h2>
                            @if($user->review_count != 0)
                                <div class="star-rating" @if($user->rating !=0) data-rating="{{ $user->rating }}" @endif>
                                    <div class="rating-counter"><a href="#listing-reviews">({{ $user->review_count }}
                                            reviews)</a></div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row sticky-wrapper">


            <!-- Sidebar
            ================================================== -->
            <div class="col-lg-4 col-md-4 margin-top-0">

                <!-- Verified Badge -->
                @if($user->id == Auth::id())
                    <div class="verified-badge with-tip">
                        <a href="{{ route('user.show.addInfo', $user->id) }}">Update Info</a>
                    </div>
            @endif
            <!-- Contact -->
                <div class="boxed-widget margin-top-30 margin-bottom-50">
                    <h3>Contact</h3>
                    <ul class="listing-details-sidebar">
                        <li><i class="sl sl-icon-phone"></i> <b>{{ $profile->full_name }}</b></li>
                        <li><i class="sl sl-icon-phone"></i> {{ $profile->number }}</li>
                        <li><i class="fa fa-envelope-o"></i> <a href="#">{{ $user->email }}</a></li>
                    </ul>

                    <!-- Reply to review popup -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <div class="small-dialog-header">
                            <h3>Send Message</h3>
                        </div>
                        @if(Auth::guard('client')->id() || Auth::id())
                        <form action="{{ route('client.message.process', [$user->id, Auth::guard('client')->id()]) }}" method="POST">
                            @csrf
                        <div class="message-reply margin-top-0">
                            <textarea name="message" cols="40" rows="3" placeholder="Your message to {{ $user->name }}"></textarea>
                            <button class="button">Send Message</button>
                        </div>
                        </form>
                            @endif
                    </div>

                    <a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i
                            class="sl sl-icon-envelope-open"></i> Send Message</a>
                </div>
                <!-- Contact / End-->

            </div>
            <!-- Sidebar / End -->
            <!-- Content
            ================================================== -->
            <div class="col-lg-8 col-md-8 padding-left-30">


                <h3 class="margin-top-0 margin-bottom-40">{{ $user->name }}'s Listings</h3>

                <!-- Listings Container -->
                <div class="row">

                    <!-- Listing Item -->
                    @foreach($listing as $listings)
                        @php
                            $review = \App\Listing::find($listings->id)->reviewPosts;
                        @endphp
                        <div class="col-lg-12 col-md-12">
                            <div class="listing-item-container list-layout">
                                <a href="{{ route('user.listing', $listings->id) }}" class="listing-item">
                                    <!-- Image -->
                                    <div class="listing-item-image">
                                        <img src="{{ asset('photos/'.$listings->image) }}" alt="">
                                        <span class="tag">{{ $listings->category }}</span>
                                    </div>

                                    <!-- Content -->
                                    <div class="listing-item-content">
                                        <div class="listing-badge now-open">Now Open</div>

                                        <div class="listing-item-inner">
                                            <h3>{{ $listings->title }}</h3>
                                            <span>{{ $listings->city . " " . $listings->address }}</span>

                                            @if($review->count() !=0)
                                                <div class="star-rating"
                                                     @if($listings->rating != 0) data-rating="{{ $listings->rating }} @endif">
                                                    <div class="rating-counter">({{ $review->count() }} reviews)</div>
                                                </div>
                                            @endif
                                        </div>

                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                                @if($user->id == Auth::id())
                                    <div style="padding-left: 587px">
                                        <a href="{{ route('user.listing.edit.show', $listings->id) }}"
                                           class="button border">Edit</a>
                                        <a href="{{ route('user.listing.delete', $listings->id) }}" class="button">Delete</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                @endforeach

                <!-- Listing Item / End -->

                    <!-- Listing Item -->

                    <!-- Listing Item / End -->

                    <!-- Listing Item -->

                    <!-- Listing Item / End -->

                </div>
                <!-- Listings Container / End -->

                <div class="pagination-container margin-top-30">
                    <nav class="pagination">
                        <ul>
                            {{--                            <li><a href="#" class="current-page">1</a></li>--}}
                            {{ $listing->links() }}
                            {{--                            <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>--}}
                        </ul>
                    </nav>
                </div>

                <!-- Reviews -->
                <div id="listing-reviews" class="listing-section">
                    <h3 class="margin-top-60 margin-bottom-20">Reviews</h3>

                    <div class="clearfix"></div>

                    <!-- Reviews -->
                    <section class="comments listing-reviews">
                        @foreach($listing as $listings)
                            @php
                                $review = \App\Listing::find($listings->id)->reviewPosts;

                            foreach ($review as $reviews){
$client = \App\Client::find($reviews->client_id);
                            @endphp
                            <ul>
                                <li>
                                    <div class="avatar"><img
                                            src="{{ asset('photos/'.$client->image) }}"
                                            alt=""/></div>
                                    <div class="comment-content">
                                        <div class="arrow-comment"></div>
                                        <div class="comment-by">{{ $client->name }}
                                            <div class="comment-by-listing">on <a href="#">{{ $listings->title }}</a></div>
                                            <span class="date">{{ $reviews->created_at->diffForHumans() }}</span>
                                            <div class="star-rating" data-rating="{{ $reviews->rating }}"></div>
                                        </div>
                                        <p>{{ $reviews->review }}</p>

                                        <div class="review-images mfp-gallery-container">
                                            <a href="{{ asset('photos/'.$reviews->image) }}" class="mfp-gallery"><img
                                                    src="{{ asset('photos/'.$reviews->image) }}" alt=""></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @php }; @endphp
                        @endforeach
                    </section>

                    <!-- Pagination -->
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Pagination -->
                            <div class="pagination-container margin-top-30">
                                <nav class="pagination">
                                    <ul>
                                        {{ $listing->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Pagination / End -->
                </div>


            </div>

        </div>
    </div>



@endsection
