<?php

namespace App\Http\Controllers;

use App\Listing;
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
                $data2 = array(
                    'listing_id' => $list_id,
                    'item_title' => $request->item_title[$item],
                    'item_description' => $request->item_description[$item],
                    'item_price' => $request->item_price[$item]
                );

                $listing->prices()->insert($data2);
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

            return redirect()->route('user.profile', $id);

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
                $data2 = array(
                    'listing_id' => $list_id,
                    'item_title' => $request->item_title[$item],
                    'item_description' => $request->item_description[$item],
                    'item_price' => $request->item_price[$item]
                );

                $listing->prices()->insert($data2);
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

            return redirect()->route('user.profile', $id);
        }










    }
}
