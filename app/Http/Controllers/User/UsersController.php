<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Custommer;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function viewAuth()
    {
        $user = Auth::guard('users')->check();
        if($user) {
            return redirect('/');
        }
        return view('login.index');
    }
    public function viewregister()
    {
        $user = Auth::guard('users')->check();
        if($user) {
            return redirect('/');
        }
        return view('register.index');
    }

    public function signUp(Request $request)
    {
        $data = $request->all();
        $data['role']= 1;
        // dd($data);
        Users::create($data);
        toastr()->success('Create user successfully');
        return redirect('/login');
    }
    public function test() {
        return view('admin.category.create');
    }

    public function actionLogin(Request $request)
    {
        $checkLogin = Auth::guard('admins')->attempt([
            'email'             => $request->email,
            'password'          => $request->password,
        ]);

        if($checkLogin) {
            // Nếu có trường is_open thì làm kiểu ni
            $user = Auth::guard('admins')->user();
            if($user->is_open) {
                toastr()->success("Đã đăng nhập thành công!!");
                return redirect('/');
            } else {
                toastr()->error("Tài khoản của bạn đã bị khóa!!");
            }
            toastr()->success("Đã đăng nhập thành công!!");
            return redirect('/');
        } else {
            toastr()->error("Email hoặc mật khẩu không chính xác!!");
            return redirect()->back();
        }

    }
    public function register(Request $request)
    {
        $hash = Str::uuid()->toString();
        $data = $request->all();

        $data['hash']       = $hash;
        $data['password']   = bcrypt($request->password);
        $link = env('APP_URL') . '/kich-hoat/' . $hash;

        Custommer::create($data);

        //     // Mail::to($request->email)->send(new CustomerActiveMail($request->full_name, $link));


        // sendMailActiveJob::dispatch($request->email, $request->full_name, $link);

        return response()->json(['status' => true]);

    }
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
        $login = Auth::guard('users')->attempt($data); //trả về true false

        if ($login) {
            //Đã login rồi và có thể xem thông tin các tài khoảng đã login
            $user = Auth::guard('users')->user(); //Lấy được thông tin tài khoảng đã login => Đã login
            if ($user->is_active == 1) {
                return response()->json([
                    'status' => 1,
                ]);
            } else {
                Auth::guard('users')->logout(); //Ép logout => Chưa login
                return response()->json([
                    'status' => 2,
                ]);
            }
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }
    public function logout()
    {
        Auth::guard('users')->logout();
        toastr()->success('Đã đăng xuất thành công!');
        return redirect('/');
    }

}
