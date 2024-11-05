<?php

namespace App\Http\Services;


use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\SettingsValidations;
use App\Models\Setting;
use Log;
class SettingsServices extends Validation
{
    public function __construct()
    {
        $this->validation = new SettingsValidations();
    }

    public function textUpdate($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        Setting::where("id", 1)->update($request->all());

        return;
    }

    public function socialUpdate($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);
        Setting::where("id", 1)->update($request->all());

        return;
    }

    public function infoUpdate($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        Setting::where("id", 1)->update($request->all());

        return;
    }
}
