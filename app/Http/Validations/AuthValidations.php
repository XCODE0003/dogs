<?php


namespace App\Http\Validations;

use App\Http\Controllers\Google2FAController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;

use Illuminate\Validation\Validator as ValidationValidator;


class AuthValidations
{
    public function register($data): V
    {
        $validator = Validator::make($data,
        [
            'first_name' => 'required|string',
            'second_name' => 'required|string',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|min:8' // |confirmed
        ],
        [
            'email' => 'Email entered is incorrect!',
            'unique' => 'The mail is already busy!',
            'required' => 'Required field!',
            'min' => 'Minimum number of characters :min!',
            'confirmed' => 'Password mismatch!',
        ]);

        return $validator;
    }

    public function login($data): V
    {
        $validator = Validator::make($data,
        [
            'email' => 'required|email|exists:App\Models\User,email',
            'password' => 'required',
            'code' => 'nullable|max:6'
        ],
        [
            'email' => 'Email entered is incorrect!',
            'exists' => 'The field was entered incorrectly!',
            'required' => 'Required field!',
        ]);

        $validator->after(function (ValidationValidator $validator) use ($data)
        {
            if (!$validator->errors()->messages())
            {
                $user = User::where("email", $data['email'])->first();

                if (!$user)
                {
                    $validator->errors()->add('email', 'Wrong password or email!');
                }

                if(!Hash::check($data['password'], $user->password))
                {
                    $validator->errors()->add('email', 'Wrong password or email!');
                    $user = null;
                }

                if ($user && !$user->email_verified_at)
                {
                    $validator->errors()->add('email', 'A confirmation email has been sent to you!');
                }
            }
        });

        return $validator;
    }

    public function resetPasswordAuth($request): V
    {
        $validator = Validator::make($request->all(),
        [
            'password_old' => 'required',
            'password' => 'required|min:8|confirmed'
        ],
        [
            'min' => 'Minimum number of characters :min!',
            'confirmed' => 'Password mismatch!',
            'required' => 'Required field!',
        ]);

        $validator->after(function (ValidationValidator $validator) use ($request)
        {
            if (!$validator->errors()->messages())
            {
                $user = $request->user();

                if(decrypt($user->password) != $request->password_old)
                {
                    $validator->errors()->add('password_old', 'Incorrect password!');
                }
            }
        });

        return $validator;
    }
}
