<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Listing;
use App\Message;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function clientRegister()
    {
        $this->validate(request(),[
            'name' => 'required|alpha_dash|unique:users,name',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = Client::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        return redirect()->back()->with('clientRegSuc', 'Registration Successful. Please Log In.');
    }

    public function clientLogin()
    {
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required'
        ]);
        if (Auth::guard('client')->attempt(['name' => request('name'), 'password' => request('password')]))
        {
            return redirect()->back();
        }
        else{
            return redirect()->back()->with('clientLogFail', 'Username and Password do not match');
        }
    }

    public function clientLogout()
    {
        Auth::guard('client')->logout();
        return redirect()->back();
    }

    public function clientProfile($id)
    {
        $client = Client::find($id);

        $booking = Client::find($id)->bookings;

        return view('client.client_profile', compact(['client', 'booking']));
    }

    public function showAddProfile($id)
    {
        return view('client.client_profile_update');
    }

    public function updateProfile(Request $request, $id)
    {
        $this->validate(request(),[
            'full_name' => 'required',
            'number' => 'required'
        ]);

        if ($request->hasFile('image'))
        {
            $img = uniqid().'.jpg';
            $request->image->move('photos', $img);

            Client::find($id)->update([
                'full_name' => request('full_name'),
                'number' => request('number'),
                'image' => $img,
            ]);

            return redirect()->route('client.profile', $id);

        }else
        {
            Client::find($id)->update([
                'full_name' => request('full_name'),
                'number' => request('number'),
            ]);

            return redirect()->route('client.profile', $id);
        }
    }

    public function message($id)
    {

        $message = Client::find($id)->messages;

        return view('client.message', compact('message'));
    }

    public function messageProcess($uid, $cid)
    {
        $this->validate(request(),[
            'message' => 'required'
        ]);

        User::find($uid)->messages()->create([
            'client_id' => $cid,
            'message' => request('message')
        ]);

        return redirect()->back()->with('messageSuc', 'Your message has been sent.');
    }

    public function messageDetails($mid)
    {
        $message = Message::find($mid);

        $reply = Message::find($mid)->replies;

        return view('client.message_details', compact(['message', 'reply']));
    }

    public function reply($mid, $cid)
    {
        $this->validate(request(),[
            'reply' => 'required'
        ]);

        Message::find($mid)->replies()->create([
            'client_id' => $cid,
            'reply' => request('reply')
        ]);

        return redirect()->back();
    }
}
