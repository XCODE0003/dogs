<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Log;

use App\Http\Services\SettingsServices;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function show()
    {
        return view('admin.pages.settings.index');
    }

    public function textUpdate(Request $request)
    {
        (new SettingsServices)->textUpdate($request);
        return;
    }

    public function socialUpdate(Request $request)
    {
        (new SettingsServices)->socialUpdate($request);
        return;
    }

    public function infoUpdate(Request $request)
    {
        (new SettingsServices)->infoUpdate($request);
        return;
    }
}
