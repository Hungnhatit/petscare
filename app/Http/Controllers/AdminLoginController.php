<?php

namespace App\Http\Controllers;

use function Laravel\Prompts\Alert;
use App\Models\CuaHang;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function getStoreLogin()
    {
        return view('login.store');
    }
    public function postLogin(Request $request)
    {

        $arr = [
            'USERNAME' => $request->name,
            'password' => $request->password, // Laravel yêu cầu key là 'password'
        ];

        if (Auth::guard('administrator')->attempt($arr)) {
            $request->session()->put('store', Auth::guard('administrator')->user()); // Lưu thông tin cửa hàng vào session
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('status', 'Tên đăng nhập hoặc mật khẩu không chính xác');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('administrator')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function index()
    {
        $stores = CuaHang::all();
        return view('managements.dashboard', compact('stores'));
    }

    public function edit($id)
    {
        $stores = new CuaHang();
        $store = $stores::where('IDCH', $id)->get()->toArray();
        dd($store[0]['IDCH']);
    }

    public function update(Request $request, $id)
    {
        $store = CuaHang::where('IDCH', $id)
            ->where('TRANGTHAI', 'Chờ duyệt')
            ->firstOrFail();
        $store->TRANGTHAI = 'Đã duyệt';
        $store->save();
        return redirect('/account')->with('success', 'Player created successfully.');
    }

    public function destroy($id)
    {
        CuaHang::where('IDCH', $id)->delete();
        return redirect('/account')->with('success', 'Member deleted successfully.');
    }
}
