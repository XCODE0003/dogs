<?php


namespace App\Http\Validations;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;

use Illuminate\Validation\Validator as ValidationValidator;

use Illuminate\Support\Facades\Auth;

class ReviewServicesValidations
{
    public function create($request): V
    {
        $validator = Validator::make($request->all(), [

            'categorie_id' => 'required|exists:App\Models\Category,id',
            'description' => 'required|string|min:30',
            'preview' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|dimensions:min_width=50,min_height=50',
        ],
        [
            'exists' => 'Значение не найдено',
            'unique' => 'Значение занято',
            'max' => 'Максимально :max',
            'required' => 'Поле обязательно для заполнения!',
            'dimensions' => 'Минимальная ширина или высота 50px',
            'in' => 'Элемент не найден',
            'mimes' => 'Файл должен быть изображением (jpg,jpeg,png,bmp,gif,svg,webp).'
        ]);

        return $validator;
    }

    public function update($request): V
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:App\Models\Product,id',
            'categorie_id' => 'required|exists:App\Models\Category,id',
            'description' => 'required|string|min:30',

            'preview' => 'nullable|mimes:jpg,jpeg,png,bmp,gif,svg,webp|dimensions:min_width=50,min_height=50',
        ],
        [
            'required' => 'Поле обязательно для заполнения!',
            'dimensions' => 'Минимальная ширина или высота 150px',
            'in' => 'Элемент не найден',
            'mimes' => 'Файл должен быть изображением (jpg,jpeg,png,bmp,gif,svg,webp).'
        ]);

        return $validator;
    }
}