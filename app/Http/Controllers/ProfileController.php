<?php

namespace App\Http\Controllers;

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

        return view('user.profile', compact(['user', 'profile']));
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

            return redirect()->route('user.profile', $id);

        }else
        {
            Profile::find($id)->update([
                'full_name' => request('full_name'),
                'number' => request('number'),
                'user_id' => Auth::id()
            ]);

            return redirect()->route('user.profile', $id);
        }
    }


}
