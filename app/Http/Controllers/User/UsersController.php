<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function signUp(Request $request)
    {
        $data = $request->all();
        $data['role']= 1;
        $data['password'] = Hash::make($request->password);
        // dd($data);
        Users::create($data);
        toastr()->success('Create user successfully');
        return redirect('/login');
    }
}