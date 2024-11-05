<?php


namespace App\Http\Validations;


use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;

use Illuminate\Validation\Validator as ValidationValidator;


class CharacteristicServicesValidations
{
    public function create($request): V
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:App\Models\Product,id',
            'title' => 'required|string|min:1',
            'text' => 'required|string|min:1',
        ],
        [
            'required' => 'Поле обязательно для заполнения!',
            'min' => 'Минимальное количество символов :min!',
        ]);

        return $validator;
    }
}