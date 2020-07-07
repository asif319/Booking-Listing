<?php

namespace App\Http\Controllers;

use App\Listing;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthenticateController extends Controller
{
    public function index()
    {
        $listings = Listing::all();

        return view('user.home', compact('listings'));

    }

    public function loginIndex()
    {
        return view('user.auth.login_register');
    }

    public function login()
    {
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['name' => request('name'), 'password' => request('password')]))
        {
            return redirect()->route('dashboard');
        }else
        {
            return redirect()->route('user.auth.login_register');
        }

    }

    public function register()
    {
        $this->validate(request(),[
            'name' => 'required|alpha_dash|unique:users,name',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        $user->profile()->create();

        return redirect()->back()->with('regSuc', 'Registration Successful. Please Log In.');

    }

    public function showChangePassword()
    {
        return view('user.auth.change_password');
    }

    public function changePassword(Request $request)
    {
        $this->validate(request(),[
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)){

            User::find(Auth::id())->update([
                'password' => Hash::make($request->password)
            ]);

            Auth::logout();

            return redirect()->route('user.login.index')->with('changeSuc', 'Your password has been update. Please Log In.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login.index');
    }
}
