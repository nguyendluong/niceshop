<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('login.index');
        }

        $user = Users::where('email', $request->email)->first();
        if ($user && Hash::check('password', $request->password)) {
            // here you know data is valid
        }

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('client.home');
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}