<?php

namespace App\Http\Services;

use App\Models\UserToken;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;
use App\Mail\User\RegistrationMail;
use App\Http\Services\UserServices;

use Illuminate\Support\Facades\Auth;

class UserTokenServices 
{
    public function create($userId)
    {
        $code = Str::random(5);
        UserToken::create([
            'user_id' => $userId,
            'code' => $code,
        ]);

        return;
    }

    public function sendEmail($userId, $userPassword)
    {
        $userToken = UserToken::where("user_id", $userId)->with('user')->whereHas('user')->firstOrFail();
        //Mail::to($userToken->user->email)->send(new RegistrationMail($userToken, $userPassword));
        return;
    }

    public function sendEmailRepeat($email)
    {
        $user = (new UserServices)->firstEmail($email);
        if(!$user){ throw new \Exception("Ошибка! Повторите регистрацию!");}

        $userToken = UserToken::where("user_id", $user->id)->with('user')->whereHas('user')->firstOrFail();
        //Mail::to($userToken->user->email)->send(new RegistrationMail($userToken));
        return;
    }

    public function confirmRegister($request)
    {
        $user = (new UserServices)->firstAndToken($request->email);
        if($user->userToken->code != $request->code){throw new \Exception("Код не верный!");}
        Auth::login($user, true);
        $user->email_verified_at = now();
        $user->save();

        $user->userToken->delete();

        return;
    }
}
