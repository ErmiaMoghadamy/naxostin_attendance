<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view("auth.login");
    }

    public function login(Request $request) 
    {
        $request->validate([
            'username' => 'string|required',
            'password' => 'string|required',
        ]);

        $credentials = $request->only('username','password');


        $user = User::where('username', $credentials['username'])->first();

        if (!$user) {
            return redirect()->back()->with('error','Wrong Username or Password');
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            return redirect()->back()->with('error','Wrong Username or Password');
        }

        Auth::login ($user);

        return redirect()->route('dash.main');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->back();
    }
}
