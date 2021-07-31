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
            'last_name' => ['required', 'string', 'max:16'],
            'first_name' => ['required', 'string', 'max:16'],
            'zipcode' => ['required', 'string', 'max:8', new ZipCodeRule],
            'prefecture' => ['required', 'string', 'max:16'],
            'municipality' => ['required', 'string', 'max:16'],
            'address' => ['required', 'string', 'max:32'],
            'apartments' => ['max:32'],
            'email' => ['required', 'string', 'email', 'max:128', Rule::unique('users')->ignore($this->id)],
            'phone_number' => ['required', 'max:14'],
        ];
    }
}
