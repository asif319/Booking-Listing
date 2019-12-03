@extends('user.layouts.master')
@section('title', 'Listing')

@section('add_listing')

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
                    <form action="{{ route('user.addListing.create', Auth::id()) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row with-forms">
                            <div class="col-md-12">
                                <h5>Listing Title <i class="tip" data-tip-content="Name of your business"></i></h5>
                                <input class="search-field" type="text" name="title"/>
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-6">
                                <h5>Category</h5>
                                <select class="chosen-select-no-single" name="category">
                                    <option label="blank">Select Category</option>
                                    <option>Eat & Drink</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
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
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Houston</option>
                                        <option>Phoenix</option>
                                        <option>San Diego</option>
                                        <option>Austin</option>
                                    </select>
                                </div>

                                <!-- Address -->
                                <div class="col-md-6">
                                    <h5>Address</h5>
                                    <input type="text" name="address" placeholder="e.g. 964 School Street">
                                </div>

                                <!-- City -->
                                <div class="col-md-6">
                                    <h5>State</h5>
                                    <input type="text" name="state">
                                </div>

                                <!-- Zip-Code -->
                                <div class="col-md-6">
                                    <h5>Zip-Code</h5>
                                    <input type="text" name="zipcode">
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
                            <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Phone -->
                            <div class="col-md-4">
                                <h5>Phone <span>(optional)</span></h5>
                                <input type="text" name="phone">
                            </div>

                            <!-- Website -->
                            <div class="col-md-4">
                                <h5>Website <span>(optional)</span></h5>
                                <input type="text" name="website">
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-4">
                                <h5>E-mail <span>(optional)</span></h5>
                                <input type="email" name="email">
                            </div>

                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Phone -->
                            <div class="col-md-4">
                                <h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>
                                <input type="text" name="facebook" placeholder="https://www.facebook.com/">
                            </div>

                        </div>
                        <!-- Row / End -->


                        <!-- Checkboxes -->
                        <h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
                        <div class="checkboxes in-row margin-bottom-20">

                            <input id="check-a" type="checkbox" name="amenities[]" value="elevator">
                            <label for="check-a">Elevator in building</label>

                            <input id="check-b" type="checkbox" name="amenities[]" value="workspace">
                            <label for="check-b">Friendly workspace</label>

                            <input id="check-c" type="checkbox" name="amenities[]" value="booking">
                            <label for="check-c">Instant Book</label>

                            <input id="check-d" type="checkbox" name="amenities[]" value="wifi">
                            <label for="check-d">Wireless Internet</label>

                            <input id="check-e" type="checkbox" name="amenities[]" value="parking_premise">
                            <label for="check-e">Free parking on premises</label>

                            <input id="check-f" type="checkbox" name="amenities[]" value="parking_street">
                            <label for="check-f">Free parking on street</label>

                            <input id="check-g" type="checkbox" name="amenities[]" value="smoking">
                            <label for="check-g">Smoking allowed</label>

                            <input id="check-h" type="checkbox" name="amenities[]" value="event">
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
                        <div >

                            <!-- Day -->
                            <div class="row opening-day">
                                <div class="col-md-2"><h5>Monday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="monday_op">
                                        <option label="Opening Time"></option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="monday_cl">
                                        <option label="Closing Time"></option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Tuesday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="tuesday_op">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="tuesday_cl">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Wednesday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="wednesday_op">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="wednesday_cl">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Thursday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="thursday_op">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="thursday_cl">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Friday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="friday_op">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="friday_cl">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Saturday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="saturday_op">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="saturday_cl">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                            <!-- Day -->
                            <div class="row opening-day js-demo-hours">
                                <div class="col-md-2"><h5>Sunday</h5></div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Opening Time" name="sunday_op">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="chosen-select" data-placeholder="Closing Time" name="sunday_cl">
                                        <!-- Hours added via JS (this is only for demo purpose) -->
                                    </select>
                                </div>
                            </div>
                            <!-- Day / End -->

                        </div>
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
                                        <tr class="pricing-list-item pattern">
                                            <td>
                                                <div class="fm-input pricing-name"><input type="text" name="item_title[]" placeholder="Title" /></div>
                                                <div class="fm-input pricing-ingredients"><input type="text" name="item_description[]" placeholder="Description" /></div>
                                                <div class="fm-input pricing-price"><input type="text" name="item_price[]" placeholder="Price" data-unit="USD" /></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <a href="#" class="button add-pricing-list-item">Add Item</a>
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
