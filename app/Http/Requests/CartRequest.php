<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            // 商品の購入個数の制約(1〜99の整数)
            'product_quantity' => [
                'required',
                'integer',
                'between:1,99',
                ]
        ];
    }

    // バリデーションメッセージのカスタマイズ
    public function messages()
    {
        return [
            'product_quantity.required' => '購入個数を入力して下さい。',
            'product_quantity.integer' => '購入個数は半角の整数で入力して下さい。',
            'product_quantity.between' => '購入個数は1〜99の半角の整数で入力して下さい。',
        ];
    }
}
