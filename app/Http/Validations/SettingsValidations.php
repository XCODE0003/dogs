<?php


namespace App\Http\Validations;

use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;
use Illuminate\Validation\Validator as ValidationValidator;


class SettingsValidations
{
    public function infoUpdate($request): V
    {

        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ],
        [
            'required' => 'Поле обязательно для заполнения.',
            'email' => 'Почта введена не верно.',
        ]);

        return $validator;
    }

    public function textUpdate($request): V
    {

        $validator = Validator::make($request->all(), 
        [
            'admin_name' => 'required|string',
            'teh_works' => 'required|in:1,0',
        ],
        [
            'required' => 'Поле обязательно для заполнения.',
        ]);

        return $validator;
    }

    public function socialUpdate($request): V
    {

        $validator = Validator::make($request->all(), 
        [
            'yt' => 'required|string',
            'in' => 'required|string',
            'wa' => 'required|string',
            'text' => 'required|string',
        ],
        [
            'required' => 'Поле обязательно для заполнения.',
        ]);

        return $validator;
    }

    public function selectUpdate($request): V
    {

        $validator = Validator::make($request->all(), 
        [
            'teh_works' => 'required|in:1,0',
        ],
        [
            'required' => 'Поле обязательно для заполнения.',
        ]);

        return $validator;
    }
}