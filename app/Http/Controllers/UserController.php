<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index($id)
    {
        return view('user.add_listing', compact('id'));
    }

    public function create($id, Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'category' => 'required',
            'city' => 'required',
            'address' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
        ]);




        if ($request->hasFile('image')) {
            $img = uniqid() . '.jpg';
            $request->image->move('photos', $img);

           $listing = User::find($id)->listings()->create([
                'user_id' => Auth::id(),
                'admin_id' => Auth::guard('admin')->id(),
                'title' => request('title'),
                'category' => request('category'),
                'city' => request('city'),
                'address' => request('address'),
                'state' => request('state'),
                'zipcode' => request('zipcode'),
                'image' => $img,
                'description' => request('description'),
                'phone' => request('phone'),
                'website' => request('website'),
                'email' => request('email'),
                'facebook' => request('facebook')
            ]);

            $list_id = $listing->id;
            if (isset($request->amenities))
            {
                $listing->amenities()->create([
                    'amenities' => implode(",", request('amenities'))
                ]);
            }else{
                $listing->amenities()->create([
                    'listing_id' => $list_id,
                ]);
            }

            foreach ($request->item_title as $item => $v)
            {
                $listing->prices()->create([
                    'item_title' => $request->item_title[$item],
                    'item_description' => $request->item_description[$item],
                    'item_price' => $request->item_price[$item]
                ]);

            }

            $listing->hours()->create([
                'monday_op' => request('monday_op'),
                'monday_cl' => request('monday_cl'),
                'tuesday_op' => request('tuesday_op'),
                'tuesday_cl' => request('tuesday_cl'),
                'wednesday_op' => request('wednesday_op'),
                'wednesday_cl' => request('wednesday_cl'),
                'thursday_op' => request('thursday_op'),
                'thursday_cl' => request('thursday_cl'),
                'friday_op' => request('friday_op'),
                'friday_cl' => request('friday_cl'),
                'saturday_op' => request('saturday_op'),
                'saturday_cl' => request('saturday_cl'),
                'sunday_op' => request('sunday_op'),
                'sunday_cl' => request('sunday_cl'),
            ]);

            return redirect()->route('user.listing', $list_id )->with('listingSuc', 'Your listing has been posted.');

        } else {
            $listing = User::find($id)->listings()->create([
                'admin_id' => Auth::guard('admin')->id(),
                'title' => request('title'),
                'category' => request('category'),
                'city' => request('city'),
                'address' => request('address'),
                'state' => request('state'),
                'zipcode' => request('zipcode'),
                'description' => request('description'),
                'phone' => request('phone'),
                'website' => request('website'),
                'email' => request('email'),
                'facebook' => request('facebook')
            ]);

            $list_id = $listing->id;
            if (isset($request->amenities))
            {
                $listing->amenities()->create([
                    'amenities' => implode(",", request('amenities'))
                ]);
            }else{
                $listing->amenities()->create([
                    'listing_id' => $list_id,
                ]);
            }

            foreach ($request->item_title as $item => $v)
            {
                $listing->prices()->create([
                    'item_title' => $request->item_title[$item],
                    'item_description' => $request->item_description[$item],
                    'item_price' => $request->item_price[$item]
                ]);
            }

            $listing->hours()->create([
                'monday_op' => request('monday_op'),
                'monday_cl' => request('monday_cl'),
                'tuesday_op' => request('tuesday_op'),
                'tuesday_cl' => request('tuesday_cl'),
                'wednesday_op' => request('wednesday_op'),
                'wednesday_cl' => request('wednesday_cl'),
                'thursday_op' => request('thursday_op'),
                'thursday_cl' => request('thursday_cl'),
                'friday_op' => request('friday_op'),
                'friday_cl' => request('friday_cl'),
                'saturday_op' => request('saturday_op'),
                'saturday_cl' => request('saturday_cl'),
                'sunday_op' => request('sunday_op'),
                'sunday_cl' => request('sunday_cl'),
            ]);

            return redirect()->route('user.listing', $list_id )->with('listingSuc', 'Your listing has been posted.');
        }
    }

    public function dashboard()
    {
        $user = User::find(Auth::id());
        $listing = User::find(Auth::id())->listings;
        $rating = $user->rating;
        $review = $user->review_count;
//        dd($user->review_count);
        return view('user.dashboard.dashboard', compact(['user', 'listing', 'rating', 'review']));
    }

    public function booking($id)
    {
$booking = User::find($id)->bookings;
//dd($booking);
        return view('user.dashboard.booking', compact('booking'));
    }

    public function message($id)
    {
        $message = User::find($id)->messages;
        return view('user.dashboard.message', compact('message'));
    }

    public function messageDetails($mid)
    {
        $message = Message::find($mid);

        $reply = Message::find($mid)->replies;

        return view('user.dashboard.user_message_details', compact(['message', 'reply']));
    }

    public function reply($mid, $uid)
    {
        $this->validate(request(),[
            'reply' => 'required'
        ]);

        Message::find($mid)->replies()->create([
            'user_id' => $uid,
            'reply' => request('reply')
        ]);

        return redirect()->back();
    }

    public function dashboardListing($uid)
    {
        $listing = User::find($uid)->listings()->latest()->paginate(10);

        return view('user.dashboard.dashboard_my_listing', compact('listing'));
    }

    public function dashboardReview($uid)
    {
        $listing = User::find($uid)->listings()->latest()->paginate(10);
        return view('user.dashboard.dashboard_reviews', compact(['listing', 'uid']));
    }

    public function addListing()
    {
        return view('user.dashboard.dashboard_add_listing');
    }

    public function profile($uid)
    {
        $user = User::find($uid);
        $profile = User::find($uid)->profile;
        return view('user.dashboard.dashboard_my_profile', compact(['profile', 'user']));
    }

    public function profileUpdate($uid)
    {
        $user = User::find($uid);
        $profile = User::find($uid)->profile;
        return view('user.dashboard.dashboard_profile_update', compact(['profile', 'user']));
    }
}
