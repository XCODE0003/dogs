<?php

namespace App\Http\Services;


use App\Models\ProductCharacteristic;

use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\CharacteristicServicesValidations;

use Illuminate\Support\Facades\Auth;

class CharacteristicServices extends Validation
{
    public function __construct()
    {
        $this->validation = new CharacteristicServicesValidations();
    }

    public function delete($id)
    {
        ProductCharacteristic::findOrFail($id)->delete();
        return;
    }

    public function create($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        return ProductCharacteristic::create($request->all());
    }

    public function find($id)
    {
        return ProductCharacteristic::findOrFail($id);
    }
}
