<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitorStoreRequest extends FormRequest
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
            'company_name'=>['required','string','max:30'],
            'last_name' =>['required','string','max:10'],
            'first_name' =>['required','string','max:10'],
            'zipcode' =>['required','string','alpha_dash','max:8'],
            'prefecture'=>['required','string','max:5'],
            'municipality' =>['required','string','max:10'],
            'address' =>['required','string','max:15'],
            'email' =>['required','email','string','max:255','unique:m_users'],
            'phone_number'=>['required','string','alpha_dash','max:15'],
            'password'=>['string','confirmed','min:6','max:15'],
            'auth_code'=>['required','max:16','min:16','string']
        ];
    }
}
