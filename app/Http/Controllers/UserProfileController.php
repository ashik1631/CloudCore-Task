<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $data = $request->all();

        //image upload...
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $photoName = time() . '.' . $extension;
        $file->move(public_path('uploads/user/'), $photoName);
        $data['image'] = 'uploads/user/' . $photoName;
        //image uploadend


       /* $data['password'] = Hash::make($request->password);*/
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('user.task.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function logins()
    {
        return view('backend.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('user.task.index')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    /**
     * Update the specified resource in storage.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.UserProfile.index');
    }
}
