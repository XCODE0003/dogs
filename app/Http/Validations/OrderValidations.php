<?php


namespace App\Http\Validations;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;

use Illuminate\Validation\Validator as ValidationValidator;


class OrderValidations
{
    public function create($data): V
    {
        $validator = Validator::make($data, [
            'comment' => 'nullable|string|min:0',
        ],
        [
            'required' => 'Required field!',
            'min' => 'Minimum number of characters :min!',
        ]);

        return $validator;
    }

    public function address($request)
    {
        $data = $request->all();
        $data['phone'] = preg_replace('/\s|\-|-|\(|\)/','', $data['phone']);

        $validator = Validator::make($data, [
            'firstName' => 'required|string|min:3',
            'lastName' => 'required|string|min:3',

            'country' => 'required|string',
            'address' => 'required|string|min:1',
            'address2' => 'required|string|min:1',
            'city' => 'required|string|min:1',
            'zip_code' => 'required|string|min:1',
            'phone' => 'required|string|min:1',

            'email' => 'required|email',
        ],
        [
            'email' => 'Email entered is incorrect!',
            'phone' => 'The phone number is entered incorrectly!',
            'required' => 'Required field!',
            'min' => 'Minimum number of characters :min!',
        ]);

        $validator->after(function (ValidationValidator $validator) use ($data) {
                    if (!$validator->errors()->messages()) {
                        if (!preg_match('/^(\+)?((\d{2,3}) ?\d|\d)(([ -]?\d)|( ?(\d{2,3}) ?)){5,12}\d$/', $data['phone'])) {
                            $validator->errors()->add('phone', 'The phone number is entered incorrectly!');
                        }
                    }
                });


        return $validator;
    }

    public function card($request)
    {
        $data = $request->all();
        $data['card_cvc'] = preg_replace("/[^0-9]/", "", $data['card_cvc']);
        $validator = Validator::make($data, [
            'card' => 'required|string|min:3',
            'card_name' => 'required|string|min:3',
            'card_et' => 'required|string',
            'card_cvc' => 'required|string|min:3|max:3',
        ],
        [
            'required' => 'Required field!',
            'min' => 'Minimum number of characters :min!',
        ]);

        $validator->after(function (ValidationValidator $validator) use ($data) {
                    if (!$validator->errors()->messages()) {
                        if (!preg_match('/^(\d{4}[ -]?){3}\d{4}$/', $data['card'])) {
                            $validator->errors()->add('card', 'Сard entered incorrectly!');
                        }
                    }
                });


        return $validator;
    }

    // public function create($data): V
    // {
    //     $data['phone'] = preg_replace('/\s|\-|-|\(|\)/','', $data['phone']);

    //     $validator = Validator::make($data, [
    //         'full_name' => 'required|string|min:3',
    //         'address' => 'required|string|min:3',
    //         'phone' => 'required|string',
    //         'sq' => 'nullable|string|min:1',
    //         'intercom' => 'nullable|string|min:1',
    //         'entrance' => 'nullable|string|min:1',
    //         'floor' => 'nullable|string|min:1',
    //         'comment' => 'nullable|string|max:128',
    //         'first_name' => 'nullable|string|min:1',
    //         'second_name' => 'nullable|string|min:1',
    //     ],
    //     [
    //         'phone' => 'Телефон введён не верно!',
    //         'required' => 'Поле обязательно для заполнения!',
    //         'min' => 'Минимальное количество символов :min!',
    //     ]);

    //     $validator->after(function (ValidationValidator $validator) use ($data) {
    //         if (!$validator->errors()->messages()) {
    //             if (!preg_match('/^(\+)?((\d{2,3}) ?\d|\d)(([ -]?\d)|( ?(\d{2,3}) ?)){5,12}\d$/', $data['phone'])) {
    //                 $validator->errors()->add('phone', 'Телефон введен не верно!');
    //             }
    //         }
    //     });

    //     return $validator;
    // }

    public function update($request): V
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:App\Models\Order,id',
            'status' => 'required|string|in:wait,success,cancel,assembly,path,preorder',
            'end_at' => 'required|date',
        ],
        [
            'date' => 'Дата введена не верно!',
            'exists' => 'Такого значения нету в базе.',
            'required' => 'Поле обязательно для заполнения!',
            'in' => 'Элемент не найден',
        ]);

        return $validator;
    }
}
