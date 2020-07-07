@extends('user.layouts.master')
@section('title', 'Listing')

@section('listing_edit')

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2><i class="sl sl-icon-plus"></i> Add Listing</h2>

                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <div id="add-listing" class="separated-form">

                    <!-- Section -->

                    <!-- Headline -->
                    <div class="add-listing-headline">
                        <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                    </div>

                    <!-- Title -->
                    @include('error.error')
                    <form action="{{ route('user.listing.edit', $listing->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row with-forms">
                            <div class="col-md-12">
                                <h5>Listing Title <i class="tip" data-tip-content="Name of your business"></i></h5>
                                <input class="search-field" type="text" name="title" value="{{ $listing->title }}"/>
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-6">
                                <h5>Category</h5>
                                <select class="chosen-select-no-single" name="category">
                                    <option label="blank">Select Category</option>
                                    <option value="Eat & Drink" {{ $listing->category == "Eat & Drink" ? 'selected' : '' }}>Eat & Drink</option>
                                    <option value="Shops" {{ $listing->category == "Shops" ? 'selected' : '' }}>Shops</option>
                                    <option value="Hotels" {{ $listing->category == "Hotels" ? 'selected' : '' }}>Hotels</option>
                                    <option value="Restaurants" {{ $listing->category == "Restaurants" ? 'selected' : '' }}>Restaurants</option>
                                    <option value="Fitness" {{ $listing->category == "Fitness" ? 'selected' : '' }}>Fitness</option>
                                    <option value="Events" {{ $listing->category == "Events" ? 'selected' : '' }}>Events</option>
                                </select>
                            </div>

                            <!-- Type -->

                        </div>
                        <!-- Row / End -->

                        <!-- Section / End -->

                    <!-- Section -->
                    <div class="add-listing-section margin-top-45">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-location"></i> Location</h3>
                        </div>

                        <div class="submit-section">

                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- City -->
                                <div class="col-md-6">
                                    <h5>City</h5>
                                    <select class="chosen-select-no-single" name="city">
                                        <option label="blank">Select City</option>
                                        <option value="Dhaka" {{ $listing->city == "Dhaka" ? 'selected' : '' }}>Dhaka</option>
                                        <option value="Chittagong" {{ $listing->city == "Chittagong" ? 'selected' : '' }}>Chittagong</option>
                                        <option value="Rajshahi" {{ $listing->city == "Rajshahi" ? 'selected' : '' }}>Rajshahi</option>
                                        <option value="Khulna" {{ $listing->city == "Khulna" ? 'selected' : '' }}>Khulna</option>
                                        <option value="Magura" {{ $listing->city == "Magura" ? 'selected' : '' }}>Magura</option>
                                        <option value="Thakurgaon" {{ $listing->city == "Thakurgaon" ? 'selected' : '' }}>Thakurgaon</option>
                                        <option value="Barishal" {{ $listing->city == "Barishal" ? 'selected' : '' }}>Barishal</option>
                                    </select>
                                </div>

                                <!-- Address -->
                                <div class="col-md-6">
                                    <h5>Address</h5>
                                    <input type="text" name="address" placeholder="e.g. 964 School Street" value="{{ $listing->address }}">
                                </div>

{{--                                <!-- City -->--}}

                                <div class="col-md-6">
                                    <h5>State</h5>
                                    <input type="text" name="state" value="{{ $listing->state }}">
                                </div>

                                <!-- Zip-Code -->
                                <div class="col-md-6">
                                    <h5>Zip-Code</h5>
                                    <input type="text" name="zipcode" value="{{ $listing->zipcode }}">
                                </div>

                            </div>
                            <!-- Row / End -->

                        </div>
                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <div class="add-listing-section margin-top-45">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-picture"></i> Gallery</h3>
                        </div>

                        <!-- Dropzone -->
                        <div class="submit-section">
                            <input type="file" name="image" class="dropzone">
                        </div>

                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <div class="add-listing-section margin-top-45">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-docs"></i> Details</h3>
                        </div>

                        <!-- Description -->
                        <div class="form">
                            <h5>Description</h5>
                            <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true">{{ $listing->description }}</textarea>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Phone -->
                            <div class="col-md-4">
                                <h5>Phone <span>(optional)</span></h5>
                                <input type="text" name="phone" value="{{ $listing->phone }}">
                            </div>

                            <!-- Website -->
                            <div class="col-md-4">
                                <h5>Website <span>(optional)</span></h5>
                                <input type="text" name="website" value="{{ $listing->website }}">
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-4">
                                <h5>E-mail <span>(optional)</span></h5>
                                <input type="email" name="email" value="{{ $listing->email }}">
                            </div>

                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Phone -->
                            <div class="col-md-4">
                                <h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>
                                <input type="text" name="facebook" placeholder="https://www.facebook.com/" value="{{ $listing->facebook }}">
                            </div>

                        </div>
                        <!-- Row / End -->


                        <!-- Checkboxes -->
                        <h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
                        <div class="checkboxes in-row margin-bottom-20">

                            <input id="check-a" type="checkbox" name="amenities[]" value="elevator"
                            {{ in_array("elevator", $amenity) ? "checked" : "" }}
                            >
                            <label for="check-a">Elevator in building</label>

                            <input id="check-b" type="checkbox" name="amenities[]" value="workspace"
                            {{ in_array("workspace", $amenity) ? "checked" : "" }}
                            >
                            <label for="check-b">Friendly workspace</label>

                            <input id="check-c" type="checkbox" name="amenities[]" value="booking"
                                {{ in_array("booking", $amenity) ? "checked" : "" }}
                            >
                            <label for="check-c">Instant Book</label>

                            <input id="check-d" type="checkbox" name="amenities[]" value="wifi"
                            {{ in_array("wifi", $amenity) ? "checked" : "" }}
                            >
                            <label for="check-d">Wireless Internet</label>

                            <input id="check-e" type="checkbox" name="amenities[]" value="parking_premise"
                            {{ in_array("parking_premise", $amenity) ? "checked" : "" }}
                            >
                            <label for="check-e">Free parking on premises</label>

                            <input id="check-f" type="checkbox" name="amenities[]" value="parking_street"
                            {{ in_array("parking_street", $amenity) ? "checked" : "" }}
                            >
                            <label for="check-f">Free parking on street</label>

                            <input id="check-g" type="checkbox" name="amenities[]" value="smoking"
                                {{ in_array("smoking", $amenity) ? "checked" : "" }}
                            >
                            <label for="check-g">Smoking allowed</label>

                            <input id="check-h" type="checkbox" name="amenities[]" value="event"
                            {{ in_array("event", $amenity) ? "checked" : "" }}
                            >
                            <label for="check-h">Events</label>

                        </div>
                        <!-- Checkboxes / End -->

                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <div class="add-listing-section margin-top-45">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
                            <!-- Switcher -->
                        </div>

                        <!-- Switcher ON-OFF Content -->
                        @foreach($hours as $hour)
                        <div >
                            <!-- Day -->
                            <div class="row opening-day">
                                <div class="col-md-2"><h5>Monday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="monday_op">
                                        <option label="Opening Time"></option>
                                        <option value="Closed" {{ $hour->monday_op == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->monday_op == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->monday_op == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->monday_op == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->monday_op == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->monday_op == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->monday_op == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->monday_op == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->monday_op == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->monday_op == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->monday_op == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->monday_op == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->monday_op == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->monday_op == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->monday_op == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->monday_op == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->monday_op == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->monday_op == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->monday_op == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->monday_op == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->monday_op == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->monday_op == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->monday_op == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->monday_op == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->monday_op == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>

                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="monday_cl">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->monday_cl == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->monday_cl == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->monday_cl == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->monday_cl == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->monday_cl == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->monday_cl == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->monday_cl == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->monday_cl == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->monday_cl == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->monday_cl == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->monday_cl == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->monday_cl == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->monday_cl == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->monday_cl == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->monday_cl == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->monday_cl == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->monday_cl == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->monday_cl == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->monday_cl == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->monday_cl == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->monday_cl == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->monday_cl == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->monday_cl == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->monday_cl == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->monday_cl == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Tuesday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="tuesday_op">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->tuesday_op == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->tuesday_op == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->tuesday_op == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->tuesday_op == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->tuesday_op == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->tuesday_op == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->tuesday_op == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->tuesday_op == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->tuesday_op == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->tuesday_op == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->tuesday_op == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->tuesday_op == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->tuesday_op == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->tuesday_op == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->tuesday_op == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->tuesday_op == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->tuesday_op == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->tuesday_op == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->tuesday_op == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->tuesday_op == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->tuesday_op == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->tuesday_op == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->tuesday_op == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->tuesday_op == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->tuesday_op == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="tuesday_cl">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->tuesday_cl == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->tuesday_cl == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->tuesday_cl == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->tuesday_cl == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->tuesday_cl == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->tuesday_cl == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->tuesday_cl == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->tuesday_cl == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->tuesday_cl == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->tuesday_cl == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->tuesday_cl == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->tuesday_cl == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->tuesday_cl == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->tuesday_cl == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->tuesday_cl == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->tuesday_cl == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->tuesday_cl == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->tuesday_cl == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->tuesday_cl == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->tuesday_cl == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->tuesday_cl == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->tuesday_cl == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->tuesday_cl == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->tuesday_cl == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->tuesday_cl == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Wednesday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="wednesday_op">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->wednesday_op == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->wednesday_op == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->wednesday_op == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->wednesday_op == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->wednesday_op == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->wednesday_op == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->wednesday_op == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->wednesday_op == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->wednesday_op == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->wednesday_op == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->wednesday_op == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->wednesday_op == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->wednesday_op == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->wednesday_op == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->wednesday_op == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->wednesday_op == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->wednesday_op == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->wednesday_op == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->wednesday_op == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->wednesday_op == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->wednesday_op == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->wednesday_op == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->wednesday_op == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->wednesday_op == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->wednesday_op == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="wednesday_cl">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->wednesday_cl == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->wednesday_cl == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->wednesday_cl == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->wednesday_cl == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->wednesday_cl == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->wednesday_cl == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->wednesday_cl == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->wednesday_cl == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->wednesday_cl == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->wednesday_cl == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->wednesday_cl == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->wednesday_cl == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->wednesday_cl == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->wednesday_cl == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->wednesday_cl == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->wednesday_cl == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->wednesday_cl == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->wednesday_cl == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->wednesday_cl == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->wednesday_cl == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->wednesday_cl == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->wednesday_cl == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->wednesday_cl == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->wednesday_cl == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->wednesday_cl == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Thursday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="thursday_op">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->thursday_op == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->thursday_op == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->thursday_op == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->thursday_op == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->thursday_op == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->thursday_op == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->thursday_op == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->thursday_op == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->thursday_op == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->thursday_op == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->thursday_op == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->thursday_op == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->thursday_op == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->thursday_op == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->thursday_op == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->thursday_op == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->thursday_op == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->thursday_op == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->thursday_op == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->thursday_op == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->thursday_op == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->thursday_op == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->thursday_op == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->thursday_op == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->thursday_op == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="thursday_cl">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->thursday_cl == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->thursday_cl == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->thursday_cl == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->thursday_cl == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->thursday_cl == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->thursday_cl == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->thursday_cl == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->thursday_cl == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->thursday_cl == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->thursday_cl == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->thursday_cl == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->thursday_cl == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->thursday_cl == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->thursday_cl == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->thursday_cl == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->thursday_cl == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->thursday_cl == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->thursday_cl == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->thursday_cl == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->thursday_cl == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->thursday_cl == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->thursday_cl == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->thursday_cl == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->thursday_cl == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->thursday_cl == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Friday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="friday_op">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->friday_op == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->friday_op == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->friday_op == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->friday_op == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->friday_op == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->friday_op == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->friday_op == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->friday_op == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->friday_op == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->friday_op == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->friday_op == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->friday_op == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->friday_op == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->friday_op == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->friday_op == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->friday_op == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->friday_op == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->friday_op == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->friday_op == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->friday_op == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->friday_op == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->friday_op == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->friday_op == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->friday_op == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->friday_op == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="friday_cl">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->friday_cl == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->friday_cl == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->friday_cl == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->friday_cl == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->friday_cl == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->friday_cl == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->friday_cl == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->friday_cl == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->friday_cl == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->friday_cl == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->friday_cl == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->friday_cl == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->friday_cl == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->friday_cl == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->friday_cl == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->friday_cl == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->friday_cl == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->friday_cl == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->friday_cl == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->friday_cl == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->friday_cl == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->friday_cl == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->friday_cl == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->friday_cl == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->friday_cl == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Saturday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="saturday_op">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->saturday_op == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->saturday_op == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->saturday_op == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->saturday_op == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->saturday_op == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->saturday_op == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->saturday_op == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->saturday_op == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->saturday_op == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->saturday_op == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->saturday_op == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->saturday_op == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->saturday_op == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->saturday_op == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->saturday_op == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->saturday_op == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->saturday_op == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->saturday_op == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->saturday_op == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->saturday_op == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->saturday_op == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->saturday_op == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->saturday_op == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->saturday_op == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->saturday_op == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="saturday_cl">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->saturday_cl == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->saturday_cl == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->saturday_cl == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->saturday_cl == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->saturday_cl == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->saturday_cl == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->saturday_cl == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->saturday_cl == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->saturday_cl == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->saturday_cl == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->saturday_cl == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->saturday_cl == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->saturday_cl == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->saturday_cl == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->saturday_cl == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->saturday_cl == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->saturday_cl == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->saturday_cl == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->saturday_cl == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->saturday_cl == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->saturday_cl == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->saturday_cl == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->saturday_cl == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->saturday_cl == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->saturday_cl == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Sunday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="sunday_op">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->sunday_op == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->sunday_op == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->sunday_op == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->sunday_op == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->sunday_op == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->sunday_op == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->sunday_op == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->sunday_op == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->sunday_op == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->sunday_op == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->sunday_op == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->sunday_op == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->sunday_op == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->sunday_op == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->sunday_op == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->sunday_op == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->sunday_op == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->sunday_op == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->sunday_op == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->sunday_op == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->sunday_op == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->sunday_op == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->sunday_op == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->sunday_op == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->sunday_op == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="sunday_cl">
                                        <option label="Closing Time"></option>
                                        <option value="Closed" {{ $hour->sunday_cl == "Closed" ? 'selected' : '' }}>Closed</option>
                                        <option value="1 AM" {{ $hour->sunday_cl == "1 AM" ? 'selected' : '' }}>1 AM</option>
                                        <option value="2 AM" {{ $hour->sunday_cl == "2 AM" ? 'selected' : '' }}>2 AM</option>
                                        <option value="3 AM" {{ $hour->sunday_cl == "3 AM" ? 'selected' : '' }}>3 AM</option>
                                        <option value="4 AM" {{ $hour->sunday_cl == "4 AM" ? 'selected' : '' }}>4 AM</option>
                                        <option value="5 AM" {{ $hour->sunday_cl == "5 AM" ? 'selected' : '' }}>5 AM</option>
                                        <option value="6 AM" {{ $hour->sunday_cl == "6 AM" ? 'selected' : '' }}>6 AM</option>
                                        <option value="7 AM" {{ $hour->sunday_cl == "7 AM" ? 'selected' : '' }}>7 AM</option>
                                        <option value="8 AM" {{ $hour->sunday_cl == "8 AM" ? 'selected' : '' }}>8 AM</option>
                                        <option value="9 AM" {{ $hour->sunday_cl == "9 AM" ? 'selected' : '' }}>9 AM</option>
                                        <option value="10 AM" {{ $hour->sunday_cl == "10 AM" ? 'selected' : '' }}>10 AM</option>
                                        <option value="11 AM" {{ $hour->sunday_cl == "11 AM" ? 'selected' : '' }}>11 AM</option>
                                        <option value="12 AM" {{ $hour->sunday_cl == "12 AM" ? 'selected' : '' }}>12 AM</option>
                                        <option value="1 PM" {{ $hour->sunday_cl == "1 PM" ? 'selected' : '' }}>1 PM</option>
                                        <option value="2 PM" {{ $hour->sunday_cl == "2 PM" ? 'selected' : '' }}>2 PM</option>
                                        <option value="3 PM" {{ $hour->sunday_cl == "3 PM" ? 'selected' : '' }}>3 PM</option>
                                        <option value="4 PM" {{ $hour->sunday_cl == "4 PM" ? 'selected' : '' }}>4 PM</option>
                                        <option value="5 PM" {{ $hour->sunday_cl == "5 PM" ? 'selected' : '' }}>5 PM</option>
                                        <option value="6 PM" {{ $hour->sunday_cl == "6 PM" ? 'selected' : '' }}>6 PM</option>
                                        <option value="7 PM" {{ $hour->sunday_cl == "7 PM" ? 'selected' : '' }}>7 PM</option>
                                        <option value="8 PM" {{ $hour->sunday_cl == "8 PM" ? 'selected' : '' }}>8 PM</option>
                                        <option value="9 PM" {{ $hour->sunday_cl == "9 PM" ? 'selected' : '' }}>9 PM</option>
                                        <option value="10 PM" {{ $hour->sunday_cl == "10 PM" ? 'selected' : '' }}>10 PM</option>
                                        <option value="11 PM" {{ $hour->sunday_cl == "11 PM" ? 'selected' : '' }}>11 PM</option>
                                        <option value="12 PM" {{ $hour->sunday_cl == "12 PM" ? 'selected' : '' }}>12 PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                        </div>
                        @endforeach
                        <!-- Switcher ON-OFF Content / End -->

                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <div class="add-listing-section margin-top-45">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-book-open"></i> Pricing</h3>
                            <!-- Switcher -->
                        </div>

                        <!-- Switcher ON-OFF Content -->
                        <div >

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="pricing-list-container">
                                        @foreach($price as $prices)
                                        <tr class="pricing-list-item pattern">
                                            <td>
                                                <input type="hidden" name="pid[]" value="{{ $prices->id }}">
                                                <div class="fm-input pricing-name"><input type="text" name="item_title[]" placeholder="Title" value="{{$prices->item_title}}" /></div>
                                                <div class="fm-input pricing-ingredients"><input type="text" name="item_description[]" placeholder="Description" value="{{$prices->item_description}}" /></div>
                                                <div class="fm-input pricing-price"><input type="text" name="item_price[]" placeholder="Price" data-unit="$" value="{{$prices->item_price}}" /></div>

                                                <div class="fm-close"><a  href="{{ route('price.delete', $prices->id) }}"><i class="fa fa-remove"></i></a></div>


                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>

                                    <a href="#" class="button add-edit-pricing-list-item">Add Item</a>
                                </div>
                            </div>

                        </div>
                        <!-- Switcher ON-OFF Content / End -->

                    </div>


                    <!-- Section / End -->

                    <input type="submit" name="submit" class="button preview" value="Submit">

                    </form>

                </div>
            </div>

        </div>

    </div>

    @endsection
