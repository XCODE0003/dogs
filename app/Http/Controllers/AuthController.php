<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthServices;
use App\Http\Services\UserTokenServices;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login() {return view('pages.auth.login');}
    public function restore() {return view('pages.auth.reset');}
    public function signup() {return view('pages.auth.register');}

    public function register(Request $request)
    {
        return (new AuthServices)->register($request);
    }

    public function confirmRegister(Request $request)
    {
        return (new UserTokenServices)->confirmRegister($request);
    }
    
    public function confirmRegisterPhone(Request $request)
    {
        
        (new AuthServices)->confirmRegisterPhone($request);
        return;
    }

    public function logout()
    {
        return (new AuthServices)->logout();
    }

    public function auth(Request $request)
    {
        return (new AuthServices)->login($request);
    }

    public function resetPassword(Request $request)
    {
        return (new AuthServices)->resetPassword($request->email);
        //return (new AuthServices)->resetPasswordMailAuth($request->email);
        //return (new AuthServices)->resetPasswordPhone($request->mobile_number);
    }

    public function resetConfirmation($user_id, $remember_token)
    {
        $data = ["user_id" => $user_id, "remember_token" => $remember_token];
        (new AuthServices)->resetConfirmation($data);

        return redirect()->route('profile')->with('success', 'Вы авторезированы, смените пароль!');
    }

    public function resetConfirmationPhone(Request $request)
    {
        return (new AuthServices)->resetConfirmationPhone($request);
    }

    public function sendEmail(Request $request)
    {
        return (new UserTokenServices)->sendEmailRepeat($request->email);
    }

    // public function resetPasswordAuth(AuthContract $authContract, Request $request)
    // {
    //     return $authContract->resetPasswordAuth($request, $this->user);
    // }
}