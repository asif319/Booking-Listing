@extends('user.layouts.master')
@section('title', 'Listing')

@section('listing')
    @if(session('listingSuc'))
        <div class="notification success closeable">
            <p><span>Congrats!</span> {{ session('listingSuc') }}</p>
            <a class="close" href="#"></a>
        </div>
    @endif

    @if(session('editSuc'))
        <div class="notification success closeable">
            <p><span>Congrats!</span> {{ session('editSuc') }}</p>
            <a class="close" href="#"></a>
        </div>
    @endif

    @if(session('messageSuc'))
        <div class="notification success closeable">
            <p><span>Congrats!</span> {{ session('messageSuc') }}</p>
            <a class="close" href="#"></a>
        </div>
    @endif
    <div class="listing-slider mfp-gallery-container margin-bottom-0">

        <a href="{{ asset('photos/'.$listing->image) }}" data-background-image="{{ asset('photos/'.$listing->image) }}"
           class="item mfp-gallery" title="Title 1"></a>
        {{--        <a href="{{ asset('images/single-listing-02.jpg') }}" data-background-image="images/single-listing-02.jpg" class="item mfp-gallery" title="Title 3"></a>--}}
        {{--        <a href="{{ asset('images/single-listing-03.jpg') }}" data-background-image="images/single-listing-03.jpg" class="item mfp-gallery" title="Title 2"></a>--}}
        {{--        <a href="{{ asset('images/single-listing-04.jpg') }}" data-background-image="images/single-listing-04.jpg" class="item mfp-gallery" title="Title 4"></a>--}}
    </div>

    <div class="container">
        <div class="row sticky-wrapper">
            <div class="col-lg-8 col-md-8 padding-right-30">

                <!-- Titlebar -->
                <div id="titlebar" class="listing-titlebar">
                    <div class="listing-titlebar-title">
                        <h2>{{ $listing->title }} <span class="listing-tag">{{ $listing->category }}</span></h2>
                        <span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{ $listing->address . " " . $listing->city}}, {{ $listing->state }}
						</a>
					</span>
                        <div class="star-rating" @if($listing->rating != 0) data-rating="{{ $listing->rating }} @endif">
                            <div class="rating-counter"><a href="#listing-reviews">({{ $reviewCount->count() }} reviews)</a></div>
                        </div>
                    </div>
                </div>

                <!-- Listing Nav -->
                <div id="listing-nav" class="listing-nav-container">
                    <ul class="listing-nav">
                        <li><a href="#listing-overview" class="active">Overview</a></li>
                        <li><a href="#listing-pricing-list">Pricing</a></li>
                    </ul>
                </div>

                <!-- Overview -->
                <div id="listing-overview" class="listing-section">

                    <!-- Description -->

                    <p>
                        {{ $listing->description }}
                    </p>

                    <!-- Amenities -->
                    <h3 class="listing-desc-headline">Amenities</h3>
                    <ul class="listing-features checkboxes margin-top-0">
                        @if(!empty($amenity[0]))
                            <li>{{ $amenity[0] }}</li>
                        @endif

                        @if(!empty($amenity[1]))
                            <li>{{ $amenity[1] }}</li>
                        @endif

                        @if(!empty($amenity[2]))
                            <li>{{ $amenity[2] }}</li>
                        @endif

                        @if(!empty($amenity[3]))
                            <li>{{ $amenity[3] }}</li>
                        @endif

                        @if(!empty($amenity[4]))
                            <li>{{ $amenity[4] }}</li>
                        @endif

                        @if(!empty($amenity[5]))
                            <li>{{ $amenity[5] }}</li>
                        @endif

                        @if(!empty($amenity[6]))
                            <li>{{ $amenity[6] }}</li>
                        @endif

                        @if(!empty($amenity[7]))
                            <li>{{ $amenity[7] }}</li>
                        @endif


                    </ul>
                </div>


                <!-- Food Menu -->
                <div id="listing-pricing-list" class="listing-section">
                    <h3 class="listing-desc-headline margin-top-70 margin-bottom-30">Pricing</h3>


                    <div class="pricing-list-container">

                        <!-- Food List -->

                        @foreach($price as $prices)
                            <h4>
                                <ul>
                                    <li>

                                        <h5>{{ $prices->item_title }}</h5>
                                        <p>{{ $prices->item_description }}</p>
                                        <span>{{ $prices->item_price }}</span>

                                    </li>
                                </ul>
                            </h4>
                    @endforeach
                    <!-- Food List -->
                    </div>

                    {{--                    <a href="#" class="show-more-button" data-more-title="Show More" data-less-title="Show Less"><i class="fa fa-angle-down"></i></a>--}}
                </div>
                <!-- Food Menu / End -->
                <!-- Location -->
            {{--                <div id="listing-location" class="listing-section">--}}
            {{--                    <h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Location</h3>--}}

            {{--                    <div id="singleListingMap-container">--}}
            {{--                        <div id="singleListingMap" data-latitude="40.70437865245596" data-longitude="-73.98674011230469" data-map-icon="im im-icon-Hamburger"></div>--}}
            {{--                        <a href="#" id="streetView">Street View</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            <!-- Reviews -->
                <div id="listing-reviews" class="listing-section">
                    <h3 class="listing-desc-headline margin-top-75 margin-bottom-20">Reviews <span>({{ $reviewCount->count() }})</span>
                    </h3>
                    <div class="clearfix"></div>

                    <!-- Reviews -->
                    @foreach($reviewPost as $reviewPosts)
                        @php
                            $clientId = $reviewPosts->client_id;
                            $revClient = \App\Client::find($clientId);
                        @endphp
                        <section class="comments listing-reviews">
                            <ul>
                                <li>
                                    <div class="avatar"><img
                                            src="{{ asset('photos/'.$revClient->image) }}"
                                            alt=""/></div>
                                    <div class="comment-content">
                                        <div class="arrow-comment"></div>
                                        <div class="comment-by"> {{ $revClient->full_name }}<span
                                                class="date">{{$reviewPosts->created_at->diffForHumans()}}</span>
                                            <div class="star-rating"  @if($reviewPosts->rating != 0) data-rating="{{ $reviewPosts->rating }}" @endif></div>
                                        </div>
                                        <p>{{ $reviewPosts->review }}</p>

                                        @if(!empty($reviewPosts->image))
                                            <div class="review-images mfp-gallery-container">
                                                <a href="{{ asset('photos/'.$reviewPosts->image) }}"
                                                   class="mfp-gallery"><img
                                                        src="{{ asset('photos/'.$reviewPosts->image) }}" alt=""></a>
                                            </div>
                                        @endif
                                        <br>
                            
                                    </div>
                                </li>
                            </ul>
                        </section>
                @endforeach

                <!-- Pagination -->
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Pagination -->
                            <div class="pagination-container margin-top-30">
                                <nav class="pagination">
                                    <ul>
                                        {{ $reviewPost->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Pagination / End -->
                </div>


                <!-- Add Review Box -->
                @if(Auth::guard('client')->check())
                    <div id="add-review" class="add-review-box">
                        <form id="add-comment"
                              action="{{ route('review.post', [$listing->id, Auth::guard('client')->id(), $user->id]) }}"
                              method="POST" class="add-comment" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!-- Add Review -->
                            <h3 class="listing-desc-headline margin-bottom-20">Add Review</h3>

                            <span class="leave-rating-title">Your rating for this listing</span>

                            <!-- Rating / Upload Button -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Leave Rating -->


                                    <div class="clearfix"></div>
                                    <div class="leave-rating margin-bottom-30">

                                        <input type="radio" name="rating[]" id="rating-1" value="5"/>
                                        <label for="rating-1" class="fa fa-star"></label>

                                        <input type="radio" name="rating[]" id="rating-2" value="4"/>
                                        <label for="rating-2" class="fa fa-star"></label>

                                        <input type="radio" name="rating[]" id="rating-3" value="3"/>
                                        <label for="rating-3" class="fa fa-star"></label>

                                        <input type="radio" name="rating[]" id="rating-4" value="2"/>
                                        <label for="rating-4" class="fa fa-star"></label>

                                        <input type="radio" name="rating[]" id="rating-5" value="1"/>
                                        <label for="rating-5" class="fa fa-star"></label>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Uplaod Photos -->
                                    <div class="add-review-photos margin-bottom-30">
                                        <div class="photoUpload">
                                            <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                            <input type="file" name="image" class="upload"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Comment -->
                            <fieldset>
                                <div>
                                    <label>Review:</label>
                                    <textarea cols="40" rows="3" name="review"></textarea>
                                </div>
                            </fieldset>
                            <input type="submit" class="button" name="submit" value="Submit Review">
                            {{--                        <div class="verified-badge with-tip" data-tip-content="Please Log In To Add Review">--}}
                            {{--                            Not Logged In?--}}
                            {{--                        </div>--}}
                            <div class="clearfix"></div>
                        </form>
                    </div>
                @else
                    <div id="add-review" class="add-review-box">
                        <form id="add-comment" action="" method="POST" class="add-comment">
                        {{ csrf_field() }}
                        <!-- Add Review -->
                            <h3 class="listing-desc-headline margin-bottom-20">Add Review</h3>
                            <span class="leave-rating-title">Your rating for this listing</span>
                            <!-- Rating / Upload Button -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Leave Rating -->
                                    <div class="clearfix"></div>
                                    <div class="leave-rating margin-bottom-30">

                                        <input type="radio" name="rating[]" id="rating-1" value="1"/>
                                        <label for="rating-1" class="fa fa-star"></label>

                                        <input type="radio" name="rating[]" id="rating-2" value="2"/>
                                        <label for="rating-2" class="fa fa-star"></label>

                                        <input type="radio" name="rating[]" id="rating-3" value="3"/>
                                        <label for="rating-3" class="fa fa-star"></label>

                                        <input type="radio" name="rating[]" id="rating-4" value="4"/>
                                        <label for="rating-4" class="fa fa-star"></label>

                                        <input type="radio" name="rating[]" id="rating-5" value="5"/>
                                        <label for="rating-5" class="fa fa-star"></label>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Uplaod Photos -->
                                    <div class="add-review-photos margin-bottom-30">
                                        <div class="photoUpload">
                                            <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                            <input type="file" name="image" class="upload"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Comment -->
                            <fieldset>
                                <div>
                                    <label>Review:</label>
                                    <textarea cols="40" rows="3" name="review" readonly></textarea>
                                </div>
                            </fieldset>
                            <div class="verified-badge with-tip" data-tip-content="Please Log In To Add Review">
                                Not Logged In?
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
            @endif
            <!-- Add Review Box / End -->


            </div>

            <!-- Sidebar
            ================================================== -->

            <div class="col-lg-4 col-md-4 margin-top-75 sticky">
                @if(Auth::guard('client')->check())
                    <form action="{{ route('booking.create', [$listing->id, $client->id, $user->id]) }}" method="POST">
                    {{ csrf_field() }}

                    <!-- Verified Badge -->
                        <div class="verified-badge with-tip"
                             data-tip-content="Listing has been verified and belongs the business owner or manager.">
                            <i class="sl sl-icon-check"></i> Verified Listing
                        </div>

                        <!-- Book Now -->

                        <div class="boxed-widget booking-widget margin-top-35">
                            <h3><i class="fa fa-calendar-check-o "></i> Book a Table</h3>
                            <div class="row with-forms  margin-top-0">

                                <!-- Date Picker - docs: http://www.vasterad.com/docs/listeo/#!/date_picker -->

                                <div class="col-lg-6 col-md-12">
                                    <input type="text" name="booking_date" id="booking-date"
data-disabled-days="@foreach($booking as $bookings)@if($bookings->listing_id==$listing->id){{ $bookings->booking_date.","}}@endif @endforeach" data-lang="en" data-large-mode="true" data-large-default="true"
                                           data-min-year="2017" data-max-year="2030">
                                </div>

                                <!-- Time Picker - docs: http://www.vasterad.com/docs/listeo/#!/time_picker -->
                                <div class="col-lg-6 col-md-12">
                                    <input type="text" name="booking_time" id="booking-time" value="9:00 am">
                                </div>

                                <!-- Panel Dropdown -->
                                <div class="col-lg-12">
                                    <div class="panel-dropdown">
                                        <a href="#">Guests <span class="qtyTotal" name="qtyTotal">1</span></a>
                                        <div class="panel-dropdown-content">

                                            <!-- Quantity Buttons -->
                                            <div class="qtyButtons">
                                                <div class="qtyTitle">Persons</div>
                                                <input type="text" name="qtyInput" value="1">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Panel Dropdown / End -->
                            </div>

                            <!-- progress button animation handled via custom.js -->
                            <input type="submit" name="submit" class="button book-now fullwidth margin-top-5"
                                   value="Book Now">
                        </div>
                        @else
                            <div class="boxed-widget booking-widget margin-top-35">
                                <h3><i class="fa fa-calendar-check-o "></i> Book a Table</h3>
                                <div class="row with-forms  margin-top-0">

                                    <!-- Date Picker - docs: http://www.vasterad.com/docs/listeo/#!/date_picker -->

                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" name="booking_date" id="booking-date"
                                               data-disabled-days="@foreach($booking as $bookings){{ $bookings->booking_date.","}}@endforeach"
                                               data-lang="en" data-large-mode="true" data-large-default="true"
                                               data-min-year="2017" data-max-year="2030">
                                    </div>

                                    <!-- Time Picker - docs: http://www.vasterad.com/docs/listeo/#!/time_picker -->
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" id="booking-time" value="9:00 am">
                                    </div>

                                    <!-- Panel Dropdown -->
                                    <div class="col-lg-12">
                                        <div class="panel-dropdown">
                                            <a href="#">Guests <span class="qtyTotal" name="qtyTotal">1</span></a>
                                            <div class="panel-dropdown-content">

                                                <!-- Quantity Buttons -->
                                                <div class="qtyButtons">
                                                    <div class="qtyTitle">Persons</div>
                                                    <input type="text" value="1">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Panel Dropdown / End -->
                                </div>
                                <div class="verified-badge with-tip" data-tip-content="Please Log In To Book a Table">
                                    Not Logged In?
                                </div>
                            </div>
                        @endif
                    </form>
                    <!-- Book Now / End -->


                    <!-- Opening Hours -->
                    <div class="boxed-widget opening-hours margin-top-35">
                        <div class="listing-badge now-open">Now Open</div>
                        <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>

                        @foreach($hours as $hour)
                            <ul>
                                <li>Monday <span>{{ $hour->monday_op }} - {{ $hour->monday_cl }}</span></li>
                                <li>Tuesday <span>{{ $hour->tuesday_op }} - {{ $hour->tuesday_cl }}</span></li>
                                <li>Wednesday <span>{{ $hour->wednesday_op }} - {{ $hour->wednesday_cl }}</span></li>
                                <li>Thursday <span>{{ $hour->thursday_op }} - {{ $hour->thursday_cl }}</span></li>
                                <li>Friday <span>{{ $hour->friday_op }} - {{ $hour->friday_cl }}</span></li>
                                <li>Saturday <span>{{ $hour->saturday_op }} - {{ $hour->saturday_cl }}</span></li>
                                <li>Sunday <span>{{ $hour->sunday_op }} - {{ $hour->sunday_cl }}</span></li>
                            </ul>
                        @endforeach
                    </div>
                    <!-- Opening Hours / End -->


                    <!-- Contact -->
                    <div class="boxed-widget margin-top-35">
                        <div class="hosted-by-title">
                            <h4><span>Hosted by</span> <a
                                    href="{{ route('user.profile', $user->id) }}">{{ $user->name }}</a></h4>
                            <a href="{{ route('user.profile', $user->id) }}" class="hosted-by-avatar"><img
                                    src="{{ asset('photos/'.$profile->image) }}" alt=""></a>
                        </div>
                        <ul class="listing-details-sidebar">
                            <li><i class="sl sl-icon-phone"></i> {{ $profile->number }}</li>
                            <!-- <li><i class="sl sl-icon-globe"></i> <a href="#">http://example.com</a></li> -->
                            <li><i class="fa fa-envelope-o"></i> <a href="#">{{ $user->email }}</a></li>
                        </ul>

                    {{--                    <ul class="listing-details-sidebar social-profiles">--}}
                    {{--                        <li><a href="#" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>--}}
                    {{--                        <li><a href="#" class="twitter-profile"><i class="fa fa-twitter"></i> Twitter</a></li>--}}
                    {{--                        <!-- <li><a href="#" class="gplus-profile"><i class="fa fa-google-plus"></i> Google Plus</a></li> -->--}}
                    {{--                    </ul>--}}

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
                    <br>
                    <br>
                    @if($userId == Auth::id())
                        <a href="{{ route('user.listing.edit.show', $listing->id) }}" class="button border">Edit</a>
                        <a href="{{ route('user.listing.delete', $listing->id) }}" class="button">Delete</a>
                @endif
                <!-- Contact / End-->


                    <!-- Share / Like -->


            </div>
            <!-- Sidebar / End -->

        </div>
    </div>
@endsection
