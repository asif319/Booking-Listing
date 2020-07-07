<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Listing;
use App\Price;
use App\ReviewPost;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index($id)
    {
        $listing = Listing::find($id);

        $userId = $listing->user_id;


        $user = User::find($userId);

        $profile = $user->profile;

        $amenities = $listing->amenities()->latest()->get()->pluck('amenities');

        $amenity = explode(',', $amenities[0]);

        $price = $listing->prices;

        $hours = $listing->hours;

        $booking = Booking::all();

        $client = Client::find(Auth::guard('client')->id());

        $reviewPost = Listing::find($id)->reviewPosts()->paginate(5);

        $reviewCount = Listing::find($id)->reviewPosts;

//        dd($user->id);

        return view('user.listings', compact(['listing', 'amenity', 'price', 'hours', 'userId', 'user',
            'profile', 'booking', 'client', 'reviewPost', 'reviewCount']));
    }

    public function allListing()
    {
        $listings = Listing::latest()->paginate(1);

    //    $paginate = Listing::paginate();

        return view('user.listings_list', compact(['listings']));
    }

    public function editShow($id)
    {
        $listing = Listing::find($id);

        $amenities = $listing->amenities()->latest()->get()->pluck('amenities');

        $amenity = explode(',', $amenities[0]);

        $hours = $listing->hours;

        $price = $listing->prices;

        return view('user.listing_edit', compact(['listing', 'amenity', 'price', 'hours', 'profile']));
    }

    public function edit($id, Request $request)
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

            $listing = Listing::find($id)->update([
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

//            $list_id = $listing->id;
            if (isset($request->amenities)) {
                Listing::find($id)->amenities()->update([
                    'amenities' => implode(",", request('amenities'))
                ]);
            } else {
                $listing->amenities()->update([
                    'listing_id' => $listing->id,
                ]);
            }

            foreach ($request->item_title as $item => $v) {
                Listing::find($id)->prices()->find($request->pid[$item])->update([
                    'item_title' => $request->item_title[$item],
                    'item_description' => $request->item_description[$item],
                    'item_price' => $request->item_price[$item]
                ]);
            }

            Listing::find($id)->hours()->update([
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

            return redirect()->route('user.listing', $id)->with('editSuc', 'Your listing has been updated.');

        } else {
            $listing = Listing::find($id)->update([
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

//            $list_id = $listing->id;
//            dd(Listing::find($id)->amenities);

            if (isset($request->amenities)) {
                Listing::find($id)->amenities()->update([
                    'amenities' => implode(",", request('amenities'))
                ]);
            } else {
                $listing->amenities()->update([
                    'listing_id' => Listing::find($id)->id,
                ]);
            }
//dd(Listing::find($id)->id);
            if ($request->item_title != null) {
                foreach ($request->item_title as $item => $v) {
                    if ($request->pid[$item] == null) {
                        Listing::find($id)->prices()->create([
                            'item_title' => $request->item_title[$item],
                            'item_description' => $request->item_description[$item],
                            'item_price' => $request->item_price[$item]
                        ]);
                    } else {
                        Listing::find($id)->prices()->find($request->pid[$item])->update([
                            'item_title' => $request->item_title[$item],
                            'item_description' => $request->item_description[$item],
                            'item_price' => $request->item_price[$item]
                        ]);
                    }
                }
            }

            Listing::find($id)->hours()->update([
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

            return redirect()->route('user.listing', $id)->with('editSuc', 'Your listing has been updated.');
        }

    }

    public function priceDelete($id)
    {
        Price::find($id)->delete();
        return redirect()->back();
    }

    public function delete($id)
    {
        Listing::find($id)->delete();

        return redirect()->route('user.profile', Auth::id());
    }


}
