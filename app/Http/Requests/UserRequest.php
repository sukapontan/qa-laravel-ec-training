<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\ZipCodeRule;

class UserRequest extends FormRequest
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
            'last_name' => ['required', 'max:10'],
            'first_name' => ['required', 'max:10'],
            'zipcode' => ['required', 'digits:7'],
            'prefecture' => ['required', 'max:5'],
            'municipality' => ['required', 'max:10'],
            'address' => ['required', 'max:15'],
            'apartments' => ['required', 'max:20'],
            'email' => ['email', 'max:128', Rule::unique('users')->ignore($this->id)],
            'phone_number' => ['required', 'numeric', 'digits_between:1,14'],
        ];
    }
}
