<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'last_name' => ['required', 'string', 'max:16'],
            'first_name' => ['required', 'string', 'max:16'],
            'zipcode' => ['required', 'string', 'max:8'],
            'prefecture' => ['required', 'string', 'max:16'],
            'municipality' => ['required', 'string', 'max:16'],
            'address' => ['required', 'string', 'max:32'],
            'apartments' => ['max:32'],
            'email' => ['required', 'string', 'email', 'max:128', 'unique:m_users'],
            'phone_number' => ['required', 'string', 'max:14'],
            'password' => ['required', 'string', 'max:64', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力して下さい。',
            'last_name.max' => '姓は16文字以下で入力して下さい。',
            'first_name.required' => '名を入力して下さい。',
            'first_name.max' => '名は16文字以下で入力して下さい。',
            'zipcode.required' => '郵便番号を入力して下さい。',
            'zipcode.max' => '郵便番号は16文字以下で入力して下さい。',
            'prefecture.required' => '都道府県を入力して下さい。',
            'prefecture.max' => '都道府県は16文字以下で入力して下さい。',
            'municipality.required' => '市町村区を入力して下さい。',
            'municipality.max' => '市町村区は16文字以下で入力して下さい。',
            'address.required' => '住所を入力して下さい。',
            'address.max' => '住所は32文字以下で入力して下さい。',
            'apartments.max' => 'マンション・部屋番号は32文字以下で入力して下さい。',
            'email.required' => 'メールアドレスを入力して下さい。',
            'email.email' => '正しいメールアドレスを入力して下さい。',
            'email.max' => 'メールアドレスは128文字以下で入力して下さい。',
            'phone_number.required' => '電話番号を入力して下さい。',
            'phone_number.max' => '電話番号は14文字以下で入力して下さい。',
            'password.required' => 'パスワードを入力して下さい。',
            'password.max' => 'パスワードは64文字以下で入力して下さい。',
            'password.confirmed' => 'パスワードと一致せさ入力して下さい。',
        ];
    }

}
