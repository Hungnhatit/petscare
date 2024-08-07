<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function getLogin()
    {
        return view('login.employee');
    }

    public function postLogin(Request $request)
    {

        $arr = [
            'TENNV' => $request->name,
            'password' => $request->password, //Laravel yêu cầu key phải là password
        ];

        if (Auth::guard('nhanvien')->attempt($arr)) {
            $request->session()->put('user', Auth::guard('nhanvien')->user()); // Lưu thông tin người dùng vào session
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('status', 'Tên đăng nhập hoặc mật khẩu không chính xác');
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('nhanvien')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function index()
    {
        $getId = "";
        if (session('user')) {
            $getId = session('user')['MANV'];
        }
        $pets = DB::table('LICHHEN')
            ->join('KHACHHANG', 'LICHHEN.MAKH', '=', 'KHACHHANG.MAKH')
            ->join('NHANVIEN', 'NHANVIEN.MANV', '=', 'LICHHEN.MANV')
            ->where('NHANVIEN.MANV', '=', $getId)
            ->get();
        return view('managements.pets', compact('pets'));
        // dd($pets);
    }

    public function update(Request $request, $id)
    {
        $getId = "";
        if (session('user')) {
            $getId = session('user')['MANV'];
        }

        $pets = DB::table('LICHHEN')
            ->where('NHANVIEN.MANV', '=', $getId)
            ->join('NHANVIEN', 'NHANVIEN.MANV', '=', 'LICHHEN.MANV')
            ->where('NHANVIEN.MANV', '=', $getId)
            ->where('LICHHEN.MALICHHEN', '=', $id)
            ->get();

        if ($pets) {
            DB::table('LICHHEN')
                ->where("LICHHEN.MALICHHEN", $id)
                ->update(['TRANGTHAI' => 'Đã trả thú cưng']);
        }
        return redirect()->back()->with('success', 'Trạng thái đã được cập nhật');
    }
}
