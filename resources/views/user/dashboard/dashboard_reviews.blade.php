@extends('user.layouts.dashboard_master')
@section('title', 'Review')

@section('review')
    @php
        $message = \App\User::find(Auth::id())->messages;
    @endphp
    <div class="dashboard-content">

        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>Reviews</h2>
                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Listings -->
            <div class="col-lg-12 col-md-24">

                <div class="dashboard-list-box margin-top-0">

                    <!-- Sort by -->
                    <div class="sort-by">
                        <div class="sort-by-select">
                            <select data-placeholder="Default order" class="chosen-select-no-single">
                                <option>All Listings</option>
                                <option>Tom's Restaurant</option>
                                <option>Sticky Band</option>
                                <option>Hotel Govendor</option>
                                <option>Burger House</option>
                                <option>Airport</option>
                                <option>Think Coffee</option>
                            </select>
                        </div>
                    </div>

                    <h4>Visitor Reviews</h4>

                    <!-- Reply to review popup -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <div class="small-dialog-header">
                            <h3>Reply to review</h3>
                        </div>


                                <div class="message-reply margin-top-0">
                                    <textarea name="reply" cols="40" rows="3" placeholder="Your reply"></textarea>
                                    <button class="button">Reply</button>
                                </div>


                        </div>
                    </div>

                    @foreach($listing as $listings)
                        @php
                            $review = \App\Listing::find($listings->id)->reviewPosts;

                        foreach ($review as $reviews){
$client = \App\Client::find($reviews->client_id);
                        @endphp
                    <ul>
                        <li>
                            <div class="comments listing-reviews">
                                <ul>
                                    <li>
                                        <div class="avatar"><img src="{{ asset('photos/'.$client->image) }}" alt="" /></div>
                                        <div class="comment-content"><div class="arrow-comment"></div>
                                            <div class="comment-by">{{ $client->name }} <div class="comment-by-listing">on <a href="#">{{ $listings->title }}</a></div> <span class="date">{{ $reviews->created_at->diffForHumans() }}</span>
                                                <div class="star-rating" @if($reviews->rating != 0) data-rating="{{ $reviews->rating }}" @endif></div>
                                            </div>
                                            <p>{{ $reviews->review }}</p>

                                            <div class="review-images mfp-gallery-container">
                                                <a href="{{ asset('photos/'.$reviews->image) }}" class="mfp-gallery"><img src="{{ asset('photos/'.$reviews->image) }}" alt=""></a>
                                            </div>
                                            <a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Reply to this review</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                        @php }; @endphp
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="clearfix"></div>
                <div class="pagination-container margin-top-30 margin-bottom-0">
                    <nav class="pagination">
                        <ul>
                            <li><a href="#" class="current-page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination / End -->

            </div>

            <!-- Listings -->
            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
            </div>
        </div>

    </div>
    @endsection
