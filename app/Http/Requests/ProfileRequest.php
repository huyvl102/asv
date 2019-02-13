<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => 'required',
            'new_password' => 'required|min:6|max:20|different:old_password',
            'password_confirmation' => 'required|min:6|max:20|same:new_password',
        ];
    }

    public function messages()
    {
        return [
            'old_password.min' => 'Mật khẩu cũ từ 6 ký tự trở lên',
            'old_password.max' => 'Mật khẩu không quá 20 ký tự',
            'old_password.required' => 'Bạn chưa nhập mật khẩu cũ',
            'new_password.min' => 'Mật khẩu mới phải từ 6 ký tự trở lên',
            'new_password.max' => 'Mật khẩu mới không quá 20 ký tự',
            'new_password.different' => 'Mật khẩu mới phải khác mật khẩu cũ',
            'new_password.required' => 'Bạn chưa nhập mật khẩu mới',
            'password_confirmation.required' => 'Bạn chưa nhập xác nhận mật khẩu mới',
            'password_confirmation.min' => 'Mật khẩu phải từ 6 ký tự trở lên',
            'password_confirmation.max' => 'Mật khẩu không quá 20 ký tự',
            'password_confirmation.same' => 'Bạn phải nhập giống mật khẩu mới',
        ];
    }
}
