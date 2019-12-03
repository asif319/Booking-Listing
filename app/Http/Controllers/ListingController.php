<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
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

        $listing = Listing::find($id);

        $listing->prices()->create([
            'item_title' => request('item_title'),
            'item_description' => request('item_description'),
            'item_price' => request('item_price')
        ]);

        $listing->amenities()->create([
           'elevator' => request('elevator'),
           'workspace' => request('workspace'),
           'booking' => request('booking'),
           'wifi' => request('wifi'),
           'parking_premise' => request('parking_premise'),
           'parking_street' => request('parking_street'),
           'smoking' => request('smoking'),
           'event' => request('event')
        ]);

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

        if ($request->hasFile('image')) {
            $img = uniqid() . '.jpg';
            $request->image->move('photos', $img);

            Listing::find($id)->create([
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

            return redirect()->route('user.show.addInfo', $id);

        } else {
            Listing::find($id)->create([
                'user_id' => Auth::id(),
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

            return redirect()->route('user.show.addInfo', $id);
        }






    }
}
