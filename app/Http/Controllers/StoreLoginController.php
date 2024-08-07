<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StoreLoginController extends Controller
{
    public function getStoreLogin()
    {
        return view('login.store');
    }

    public function postLogin(Request $request)
    {

        $arr = [
            'TENCH' => $request->name,
            'password' => $request->password, // Laravel yêu cầu key là 'password'
        ];

        if (Auth::guard('taikhoanch')->attempt($arr)) {
            $request->session()->put('store', Auth::guard('taikhoanch')->user()); // Lưu thông tin cửa hàng vào session
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('status', 'Tên đăng nhập hoặc mật khẩu không chính xác');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('taikhoanch')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

  
}
