<?php


namespace App\Http\Validations;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;

use Illuminate\Validation\Validator as ValidationValidator;

use Illuminate\Support\Facades\Auth;

class ProductServicesValidations
{
    public function create($request): V
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:App\Models\Product,title',
            'price' => 'required|int',
            'status' => 'required|in:not_available,available',
            'category_id' => 'required|exists:App\Models\Category,id',

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
            'title' => 'nullable|string|unique:App\Models\Product,title',
            'category_id' => 'required|exists:App\Models\Category,id',
            'price' => 'required|decimal:0,2',
            'status' => 'required|in:not_available,available',

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