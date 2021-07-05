<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneRule;
use App\Rules\ZipcodeRule;
use App\Rules\MailCheck;

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
            'password'=>['required', 'string','confirmed','min:8','max:64'],
            'last_name' =>['required','string','max:16'],
            'first_name' =>['required','string','max:16'],
            'zipcode' =>['required','string','min:7','max:7', new ZipcodeRule()],
            'prefecture'=>['required','string','max:16'],
            'municipality' =>['required','string','max:16'],
            'address' =>['required','string','max:32'],
            'apartments' => ['string', 'max:32'],
            'email' =>['required','email','string','max:128','unique:m_users',new MailCheck($this->auth_code)],
            'phone_number'=>['required','string','min:8','max:14', new PhoneRule()],
            'company_name'=>['required','string','max:128'],
            'auth_code'=>['required','max:16','min:16','string','exists:m_applicants,auth_code']
        ];
    }
}
