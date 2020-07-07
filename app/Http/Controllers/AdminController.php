<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Listing;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();

        $listing = Listing::all();

        $user = User::all();

        $profile = Profile::all();

       return view('admin.layouts.dashboard', compact(['admin', 'listing', 'user', 'profile']));
    }

    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login()
    {
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['name' => request('name'), 'password' => request('password')]))
        {
            return redirect()->route('admin');
        }
        else{
            return redirect()->route('admin.login.show')->with('logFail', 'Username and Password do not match');
        }

    }

    public function profile()
    {
        $users = User::latest()->get();


        return view('admin.all_profile', compact('users'));
    }

    public function listing()
    {
        $listing = Listing::latest()->paginate(5);

        return view('admin.all_listings', compact('listing'));
    }

    public function userDelete($id)
    {
        User::find($id)->delete();

        return redirect()->route('admin.user.profile')->with('delSuc', 'User has been removed');

    }

    public function listingDelete($id)
    {
        Listing::find($id)->delete();

        return redirect()->route('admin.user.listing')->with('delSuc', 'Listing has been removed');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
}
