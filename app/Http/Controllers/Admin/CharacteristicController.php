<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Log;

use App\Http\Controllers\Controller;
use App\Http\Services\CharacteristicServices;

class CharacteristicController extends Controller
{
    public function create(Request $request)
    {
        $productCharacteristic = (new CharacteristicServices)->create($request);
        $productCharacteristic = (new CharacteristicServices)->find($productCharacteristic->id);
        return $productCharacteristic;
    }

    public function delete($characteristic_id = null)
    {
        (new CharacteristicServices)->delete($characteristic_id);
        return;
    }
}
