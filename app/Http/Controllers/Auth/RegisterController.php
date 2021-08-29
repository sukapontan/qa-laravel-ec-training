<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\MUser;
use Illuminate\Http\Request;
use App\Rules\ZipCodeRule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'last_name' => ['required', 'max:10'],
            'first_name' => ['required', 'max:10'],
            'zipcode' => ['required', 'string', 'min:8', 'max:8', new ZipcodeRule()],
            'prefecture' => ['required', 'max:5'],
            'municipality' => ['required', 'max:10'],
            'address' => ['required', 'max:15'],
            'apartments' => ['max:20'],
            'email' => ['email', 'required', 'max:128', 'unique:m_users,email'],
            'phone_number' => ['required', 'digits_between:10,11'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\MUser
     */
    protected function create(array $data)
    {
        // dd($data);

        return MUser::create([
            'last_name' => $data['last_name'],  // 姓
            'first_name' => $data['first_name'],    // 名
            'zipcode' => $data['zipcode'],  // 郵便番号
            'prefecture' => $data['prefecture'],  // 都道府県
            'municipality' => $data['municipality'],  // 市町村区
            'address' => $data['address'],  // 番地
            'apartments' => $data['apartments'],  // マンション名・部屋番号
            'email' => $data['email'],  // メールアドレス
            'phone_number' => $data['phone_number'],  // 電話番号
            'password' => bcrypt($data['password']), // パスワード
            'user_classification_id' => 3,
            'company_name' => $data['company_name'],
            'delete_flag' => 0
        ]);
    }

    // 新規登録後、自動ログインをさせないようにオーバーライド
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}
