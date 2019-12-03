<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthenticateController extends Controller
{
    public function index()
    {
        return view('user.layouts.master');

    }

    public function dashboard()
    {
        return view('admin.layouts.dashboard');
    }

    public function login()
    {
        $this->validate(request(),[
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['name' => request('name'), 'password' => request('password')]))
        {
            return redirect()->route('home');
        }else
        {
            return redirect()->route('home');
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

        return redirect()->route('home')->with('regSuc', 'Register Success Hoise');

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

            return redirect()->route('home');

        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
