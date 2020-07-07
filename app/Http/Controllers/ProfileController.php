<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);

        $profile = $user->profile;

        $listing = $user->listings()->latest()->paginate(10);

        $clientInfo = $user->listings;

        $rating = $user->listings()->avg('rating');

        $reviewCount = $user->listings()->sum('review_count');

//        dd($reviewCount);

        return view('user.profile', compact(['user', 'profile', 'listing', 'rating', 'reviewCount']));
    }

    public function showAddInfo($id)
    {
        return view('user.profile_update');
    }

    public function addInfo(Request $request, $id)
    {
        $this->validate(request(),[
            'full_name' => 'required',
            'number' => 'required'
        ]);

        if ($request->hasFile('image'))
        {
            $img = uniqid().'.jpg';
            $request->image->move('photos', $img);

            Profile::find($id)->update([
                'full_name' => request('full_name'),
                'number' => request('number'),
                'image' => $img,
                'user_id' => Auth::id()
            ]);

            return redirect()->route('user.dashboard.profile', $id)->with('proSuc', 'Your profile has been update.');

        }else
        {
            Profile::find($id)->update([
                'full_name' => request('full_name'),
                'number' => request('number'),
                'user_id' => Auth::id()
            ]);

            return redirect()->route('user.dashboard.profile', $id)->with('proSuc', 'Your profile has been update.');
        }
    }




}
