@extends('user.layouts.master')

@section('message_details')
{{--    Client Please--}}

    <div class="col-lg-12 col-md-12">

    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Messages</h2>
                <!-- Breadcrumbs -->

            </div>
        </div>
    </div>

        <div class="messages-container margin-top-0">
            <div class="messages-headline">
                <h4>Kathy Brown: </h4>
                <div class="message-text"><p>{{ $message->message }}</p></div>

            </div>
    <div class="messages-container-inner">
    <div class="message-content">
        @foreach($reply as $replies)

            @if($replies->user_id !== null)
                @php
                    $user = \App\User::find($replies->user_id)->profile;
                @endphp
                <div class="message-bubble">
                    <div class="message-avatar"><img src="{{ asset('photos/'.$user->image) }}" alt="" /></div>
                    <div class="message-text"><p>{{ $replies->reply }}</p></div>
                </div>
            @endif

            @if($replies->client_id !== null)
                    @php
                        $client = \App\Client::find($replies->client_id);
                    @endphp
            <div class="message-bubble me">
                <div class="message-avatar"><img src="{{ asset('photos/'.$client->image) }}" alt="" /></div>
                <div class="message-text"><p>{{ $replies->reply }}</p></div>
            </div>
            @endif

        @endforeach
    <!-- Reply Area -->
        <div class="clearfix"></div>

        <div class="message-reply">
            <form action="{{ route('client.reply', [$message->id, Auth::guard('client')->id()]) }}" method="POST">
                {{ csrf_field() }}

            <textarea cols="40" rows="3" name="reply" placeholder="Your Message"></textarea>
                <input type="submit" name="submit" class="button">
            </form>
        </div>

    </div>
    </div>
        </div>

    </div>
    @endsection
