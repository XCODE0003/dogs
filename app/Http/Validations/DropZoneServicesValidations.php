<?php


namespace App\Http\Validations;

use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;
use Illuminate\Validation\Validator as ValidationValidator;


class DropZoneServicesValidations
{
    public function save($request): V
    {
        $validator = Validator::make($request->all(), 
        [
            'uid' => 'required|exists:App\Models\Product,id',
            
            'file' => 'required',
            'file.*' => 'required|mimes:mp4,jpg,jpeg,png,bmp,gif,svg,webp,mov|dimensions:min_width=50,min_height=50',
        ],
        [
            'max' => 'Максимальное количество символов :max.',
            'min' => 'Минимальное количество символов :min.',
            'required' => 'Поле обязательно для заполнения.',
            'dimensions' => 'Минимальная высота и ширина 50px.',
            'exists' => 'Такого значения нету в списке.',
            'image' => 'Файл должен быть изображением (mp4,jpg,jpeg,png,bmp,gif,svg,webpp,mov).'
        ]);

        return $validator;
    }

    public function delete($request): V
    {
        $validator = Validator::make($request->all(), 
        [
            'uidPhoto' => 'required|exists:App\Models\ProductPhoto,id',
        ],
        [
            'exists' => 'Такого значения нету в списке.',
            'required' => 'Поле обязательно для заполнения.',
        ]);

        return $validator;
    }
}