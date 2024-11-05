<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserToken;

use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\AuthValidations;

use App\Http\Services\UserServices;
//use App\Http\Services\API\SendPulseServices;
//use App\Http\Services\UserTokenServices;
// use App\Http\Services\ReferralServices;

use Illuminate\Support\Facades\Mail;
use App\Mail\User\PasswordResetMail;
use App\Mail\User\RegistrationMail;

use Illuminate\Support\Facades\Cookie;

class AuthServices extends Validation
{
    public function __construct()
    {
        $this->validation = new AuthValidations();
    }

    public function checkUser($user_id)
    {
        if($user_id)
        {
            $user = (new UserServices)->find($user_id);
            if($user && !$user->mobile_verified_at){
                (new UserServices)->distroy($user->id);
            }
        }
        return;
    }

    public function register($request)
    {
        $data = $request->all();
        // $data['mobile_number'] = preg_replace('/\s|\-|-|\(|\)/','', $request['mobile_number']);

        // поиск не подтверждённого пользователя и уаделние
        // $this->checkUser(Cookie::get('user_id'));

        // $data['subscription_mail'] = ($request['subscription_mail'] ? "yes" : "no");

        $validData = $this->validation(__FUNCTION__, $data);
        // $data["ref_code"] = Str::random(15);

        unset($data['subscription_mail']);

        $user = User::create($data);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = now();
        $user->save();

        Auth::login($user, true);

        // (new SendPulseServices)->sendSMS($data['mobile_number'], $user->mobile_verify_code);

        // cookie()->queue('user_id', $user->id, 8400600);


        // (new UserTokenServices)->create($user->id);
        // (new UserTokenServices)->sendEmail($user->id, $request->password);

        Mail::to($user->email)->send(new RegistrationMail($user));

        // Log::debug($request->cookie('ref_code'));
        // if($request->cookie('ref_code'))
        // {
        //     (new ReferralServices)->create($user->id, $request->cookie('ref_code'));
        // } else {
        //     $userRef = User::where("role", "admin")->first();
        //     (new ReferralServices)->create($user->id, $userRef->ref_code);
        // }

        return;
    }

    // public function confirmRegister($request)
    // {
    //     $userToken = UserToken::where('code', $code)->with('user')->whereHas('user')->firstOrFail();
    //     Auth::login($userToken->user, true);
    //     $userToken->user->email_verified_at = now();
    //     $userToken->user->save();

    //     $userToken->delete();
    //     return redirect()->route('home')->with('success', 'Вы успешно зарегистрировались!');
    // }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function login($request)
    {
        $data = $request->all();
        // $data['mobile_number'] = preg_replace('/\s|\-|-|\(|\)/','', $request['mobile_number']);

        $validData = $this->validation(__FUNCTION__, $data);

        $user = User::where('email', $request->email)->first();
        Auth::login($user, true);
        return;
    }

    public function resetPassword($email)
    {
        $new_password = Str::random(10);

        $user = User::where('email', $email)->whereNotNull("email_verified_at")->firstOrFail();
        $user->password = Hash::make($new_password);
        $user->save();

        Mail::to($email)->send(new PasswordResetMail($new_password));
        return;
    }

    public function resetPasswordMailAuth($email)
    {
        $user = User::where('email', $email)->whereNotNull("email_verified_at")->firstOrFail();

        Mail::to($email)->send(new PasswordResetMail($user->remember_token, $user->id));
        return;
    }

    public function resetPasswordPhone($phone)
    {
        $phone = preg_replace('/\s|\-|-|\(|\)/','', $phone);

        $user = User::where('mobile_number', $phone)->whereNotNull("mobile_verified_at")->firstOrFail();
        $user->mobile_verify_code = mt_rand(1000, 9999);
        $user->save();


        return;
    }

    public function resetConfirmationPhone($request)
    {
        $phone = preg_replace('/\s|\-|-|\(|\)/','', $request->mobile_number);
        $user = User::where('mobile_number', $phone)->where("mobile_verify_code", $request->code)->whereNotNull("mobile_verified_at")->firstOrFail();
        Auth::login($user, 1);

        return;
    }

    public function resetConfirmation($data)
    {
        $user =  User::where('remember_token', $data["remember_token"])->whereNotNull("email_verified_at")->findOrFail($data["user_id"]);
        $user->remember_token = null;
        $user->save();

        Auth::login($user, true);
        return;
    }

    public function resetPasswordAuth($request, $user)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        $user->password = Hash::make($request->password_new);
        $user->save();

        return;
    }

    public function confirmRegisterPhone($request)
    {
        $mobile_number = preg_replace('/\s|\-|-|\(|\)/','', $request->mobile_number);
        $user = User::where("mobile_number", $mobile_number)->where("mobile_verify_code", $request->code)->whereNull("mobile_verified_at")->first();
        if(!$user){abort(422);}
        Auth::login($user, true);
        return;
    }
}
