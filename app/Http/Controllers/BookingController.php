<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Token;

class BookingController extends Controller
{
    public function bookingCreate($lid, $cid, $uid)
    {
//dd(Client::find($cid));
       $booking = Client::find($cid)->bookings()->create([
            'user_id' => $uid,
            'listing_id' => $lid,
            'booking_date' => request('booking_date'),
            'booking_time' => request('booking_time'),
            'qtyInput' => request('qtyInput')
        ]);
        $bookingId = $booking->id;
        return redirect()->route('booking.details', [$lid, $cid, $bookingId]);
    }

    public function bookingDetails($lid, $cid, $bid)
    {
        $listing = Listing::find($lid);
        $booking = Booking::find($bid);
        $client = Client::find($cid);
//        dd($client);
        return view('client.booking', compact(['listing', 'booking', 'client']));
    }

    public function payView($bid, $cid)
    {
        $booking = Booking::find($bid);
        $client = Client::find($cid);
        return view('client.pay', compact(['booking', 'client']));
    }

    public function pay($bid, $cid)
    {

        Stripe::setApiKey('sk_test_DizNG4nMVpmoNbzadd5uYzwM00SFsLBd8v');
        $token = Token::create([
            'card' => [
                'number' => request('card_num'),
                'exp_month' => request('e_m'),
                'exp_year' => request('e_y'),
                'cvc' => request('cvc')
            ]
        ]);
        $booking = Booking::find($bid);
        $am = $booking->qtyInput * 10;
        Charge::create([
            "amount" => $am * 100,
            "currency" => "usd",
            "source" => $token['id'], // obtained with Stripe.js
            "description" => "Test payment."
        ]);

        $client = Client::find($cid);

        return view('client.booking_confirmation', compact('client'));

    }

    public function approve($id)
    {
        Booking::find($id)->update([
            'approve' => 1
        ]);

        return redirect()->back()->with('approveSuc', 'Booking has been approved');
    }

    public function cancelBooking($id)
    {
        Booking::find($id)->update([
            'approve' => 2
        ]);

        return redirect()->back()->with('delSuc', 'Booking has been deleted');
    }
}
