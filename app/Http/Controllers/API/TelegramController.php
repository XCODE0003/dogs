<?php

namespace App\Http\Controllers\API;

use Log;
use Illuminate\Http\Request;

use App\Http\Services\API\Telegram\TelegramServices;

class TelegramController
{
    public function index(Request $request)
    {
    // отключаю лонгпулл сервер
//        return;
        (new TelegramServices)->index($request);
        return;
    }
}
