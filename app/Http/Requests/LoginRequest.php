<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:128', 'unique:m_users'],
            'password' => ['required', 'string', 'max:64', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'メールアドレスを入力して下さい。',
            'email.email' => '正しいメールアドレスを入力して下さい。',
            'email.max' => 'メールアドレスは128文字以下で入力して下さい。',
            'password.required' => 'パスワードを入力して下さい。',
            'password.max' => 'パスワードは64文字以下で入力して下さい。',
            'password.confirmed' => 'パスワードと一致せさ入力して下さい。',
        ];
    }
}
