<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'last_name' => 'required', 'string', 'max:16',
            'first_name' => 'required', 'string', 'max:16',
            'zipcode' => 'required',
            'prefecture' => 'required', 'string', 'max:16',
            'municipality' => 'required', 'string', 'max:16',
            'address' => 'required', 'string', 'max:32',
            'apartments' => 'max:32',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'phone_number' => 'required', 'max:16',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ];
    }

    /**
     *  バリデーション項目名定義
     * @return array
     */
    public function attributes()
    {
        return [
            'last_name' => '姓',
            'first_name' => '名',
            'zipcode' => '郵便番号',
            'prefecture' => '都道府県',
            'municipality' => '市区町村',
            'address' => '番地',
            'apartments' => '建物名',
            'email' => 'メールアドレス',
            'phone_number' => '電話番号',
            'password' => 'パスワード',
        ];
    }

     /**
     * バリデーションメッセージ
     * @return array
     */
    public function messages()
    {
        return [
            'last_name.required' => ':last_nameを入力してください。',
            'last_name.max' => ':last_nameは16文字以下で入力してください。',
            'first_name.required' => ':first_nameを入力してください。',
            'first_name.max' => ':first_nameは16文字以下で入力してください。',
            'zipcode.required' => ':zipcodeを入力してください。',
            'prefecture.required' => ':prefectureを入力してください。',
            'prefecture.max' => ':prefectureは16文字以下で入力してください。',
            'municipality.required' => ':municipalityを入力してください。',
            'municipality.max' => ':municipalityは16文字以下で入力してください。',
            'address.required' => ':addressを入力してください。',
            'address.max' => ':addressは32文字以下で入力してください。',
            'apartments.max' => ':apartmentsは32文字以下で入力してください。',
            'email.required' => ':emailを入力してください。',
            'email.max' => ':emailは255文字以下で入力してください。',
            'email.unique' => ':このemailはすでに使用されています。',
            'phone_number.required' => ':phone_numberを入力してください。',
            'phone_number.max' => ':phone_numberは16文字以下で入力してください。',
            'password.required' => ':passwordを入力してください。',
            'password.min' => ':passwordは8文字以上で入力してください。',
            'password.confirmed' => ':確認passwordと一致していません。',
        ];
    }
}
