<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class loginRequest extends Request
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
            'email'=>'required',
            'password'=>'required'
        ];
    }
    public function messages(){
        return [
            'email.required' => 'Vui lòng nhập email để đăng nhập',
            'password.required' =>'Vui lòng nhập mật khẩu để đăng nhập'
        ];
    }
}
