@extends('user.layouts.dashboard_master')
@section('title', 'Message')

@section('message')
    //User Please!

    <div class="dashboard-content">

        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>Messages</h2>
                    <!-- Breadcrumbs -->
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Listings -->
            <div class="col-lg-12 col-md-12">

                <div class="messages-container margin-top-0">
                    <div class="messages-headline">
                        <h4>Inbox</h4>
                    </div>

                    <div class="messages-inbox">
                        @foreach($message as $messages)
                        <ul>
                            <li class="unread">
                                <a href="{{ route('user.message.details', $messages->id) }}">
                                    <div class="message-avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

                                    <div class="message-by">
                                        <div class="message-by-headline">
                                            <h5>Kathy Brown <i>Unread</i></h5>
                                            <span>2 hours ago</span>
                                        </div>
                                        <p>{{ $messages->message }}</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
@endforeach
                    </div>
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

            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
            </div>
        </div>

    </div>

@endsection
