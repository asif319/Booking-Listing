<?php

namespace App\Http\Controllers;

use App\Client;
use App\Listing;
use App\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviewPost(Request $request, $lid, $cid, $uid)
    {
        $this->validate(request(), [
            'review' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $img = uniqid() . '.jpg';
            $request->image->move('photos', $img);

            if (isset($request->rating)) {
                Client::find($cid)->reviewPosts()->create([
                    'user_id' => $uid,
                    'listing_id' => $lid,
                    'rating' => implode(",", request('rating')),
                    'image' => $img,
                    'review' => request('review')
                ]);

                $count = Listing::find($lid)->reviewPosts()->count();
                $rating = Listing::find($lid)->reviewPosts()->avg('rating');
                Listing::find($lid)->update([
                   'rating' =>$rating,
                    'review_count' => $count
                ]);

                $userRating = User::find($uid)->reviewPosts()->avg('rating');
                $userCount = User::find($uid)->reviewPosts()->count();
               User::find($uid)->update([
                    'rating' => $userRating,
                    'review_count' => $userCount
                ]);

                return redirect()->back();

            }else{
                Client::find($cid)->reviewPosts()->create([
                    'user_id' => $uid,
                    'listing_id' => $lid,
                    'image' => $img,
                    'review' => request('review')
                ]);

                $count = Listing::find($lid)->reviewPosts()->count();
                Listing::find($lid)->update([
                    'review_count' => $count
                ]);

                $userCount = User::find($uid)->reviewPosts()->count();
                User::find($uid)->update([
                    'review_count' => $userCount
                ]);
                return redirect()->back();
            }
        }else{
            if (isset($request->rating)) {
                Client::find($cid)->reviewPosts()->create([
                    'user_id' => $uid,
                    'listing_id' => $lid,
                    'rating' => implode(",", request('rating')),
                    'review' => request('review')
                ]);

                $count = Listing::find($lid)->reviewPosts()->count();
                $rating = Listing::find($lid)->reviewPosts()->avg('rating');
                Listing::find($lid)->update([
                    'rating' => $rating,
                    'review_count' => $count
                ]);

                $userRating = User::find($uid)->reviewPosts()->avg('rating');
                $userCount = User::find($uid)->reviewPosts()->count();
                User::find($uid)->update([
                    'rating' => $userRating,
                    'review_count' => $userCount
                ]);

                return redirect()->back();
            }else{
                Client::find($cid)->reviewPosts()->create([
                    'user_id' => $uid,
                    'listing_id' => $lid,
                    'review' => request('review')
                ]);

                $count = Listing::find($lid)->reviewPosts()->count();
                Listing::find($lid)->update([
                    'review_count' => $count
                ]);

                $userCount = User::find($uid)->reviewPosts()->count();
                User::find($uid)->update([
                    'review_count' => $userCount
                ]);
                return redirect()->back();
            }
        }
    }
}
