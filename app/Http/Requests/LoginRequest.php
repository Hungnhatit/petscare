<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|min:6',
            'password' => 'required|min:8'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên người dùng',
            'password' => 'Mật khẩu'
        ];
    }

    // Hàm dùng để thay đổi nội dung báo lỗi                                                        
    public function messages()
    {
        return [
            'required' => ":attribute không được để trống",
            'min' => ':attribute phải tối thiểu :min ký tự',
        ];
    }
}
