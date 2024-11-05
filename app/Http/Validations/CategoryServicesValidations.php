<?php


namespace App\Http\Validations;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;

use Illuminate\Validation\Validator as ValidationValidator;

use Illuminate\Support\Facades\Auth;

class CategoryServicesValidations
{
    public function create($request): V
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3',

            'preview' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|dimensions:min_width=100,min_height=100',
        ],
        [
            'required' => 'Поле обязательно для заполнения!',
            'dimensions' => 'Минимальная ширина или высота 100px',
            'in' => 'Элемент не найден',
            'mimes' => 'Файл должен быть изображением (jpg,jpeg,png,bmp,gif,svg,webp).'
        ]);

        return $validator;
    }

    public function update($request): V
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:App\Models\Category,id',
            'title' => 'required|string|min:3',

            'preview' => 'nullable|mimes:jpg,jpeg,png,bmp,gif,svg,webp|dimensions:min_width=100,min_height=100',
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