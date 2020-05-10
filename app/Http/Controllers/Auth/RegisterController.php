<?php


namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;


/**
 * Class RegisterController
 * @package %%NAMESPACE%%\Http\Controllers\Auth
 */
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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'f_name' => 'required',
            'user_name' => 'required',
            'password' => 'required|min:4', 

            'store_name' => 'required',
            'store_url' => 'required',
            'website' => 'required',

            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address_1' =>'required',

            'zip_code' => 'required|number',

            'contact_country_code' => 'required|number',
            'contact_no' => 'required|number',
            'email' => 'required|email|max:255|unique:users',

            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $data)
    {
       

        
       
        if(!empty($data['profile_image'])){
          //  $data['profile_image']->move(public_path('uploads'), $profile_image);

             $profile_extension = $data['profile_image']->getClientOriginalExtension();

                if($profile_extension =='jpeg' || $profile_extension =='png' ||$profile_extension=='jpg'|| $profile_extension=='svg' ){

                        $profile_image = time().'.'.$data['profile_image']->getClientOriginalExtension();

                            $data['profile_image']->move(public_path('uploads'), $profile_image);
                }else{

                    $profile_image ='';
                } 
        }else{
                $profile_image ='';
        }

           $fields = [
            'f_name' => $data['f_name'],
            'l_name' => $data['l_name'],
            'user_name' => $data['user_name'],
            'password' => bcrypt($data['password']),

            'profile_image' => $profile_image,
            'store_name' => $data['store_name'],
            'store_url' => $data['store_url'],
            'website' => $data['website'],

            'role' => '2',

            'country' => $data['country'],
            'state' => $data['state'],
            'city' => $data['city'],
            'address_1' => $data['address_1'],
            'address_2' => $data['address_2'],
            'zip_code' => $data['zip_code'],

            'email' => $data['email'],
            'contact_country_code' => $data['contact_country_code'],
            'contact_no' => $data['contact_no'],
        ];
        if (config('auth.providers.users.field', 'email') === 'username' && isset($data['username'])) {
            $fields['username'] = $data['username'];


        }
        User::create($fields);
        return redirect()->back();
    }
}