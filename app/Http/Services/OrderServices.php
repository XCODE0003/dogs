<?php

namespace App\Http\Services;

use App\Http\Services\ProductServices;
use App\Http\Services\BasketServices;
use App\Models\Order;
use App\Models\delivery;

use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\OrderValidations;

use Illuminate\Support\Facades\Auth;

use App\Http\Services\API\BinListServices;
use App\Http\Services\API\Telegram\TelegramServices;
use App\Http\Services\API\Telegram\TextController;

class OrderServices extends Validation
{
    public function __construct()
    {
        $this->validation = new OrderValidations();
    }

    public function create($request)
    {
        $validData = $this->validation(__FUNCTION__, $request->all());

        $data = $request->all();

        if(Auth::check()){$data["user_id"] = $request->user()->id;}

        $data["end_at"] = \Carbon\Carbon::now()->addDays(14);
        $data["products"] = (new BasketServices)->get();
        $data["basket_info"] = (new BasketServices)->info();

        $order = Order::create($data);

        (new BasketServices)->distroy();
        return $order->id;
    }

    public function get()
    {
        return Order::query();
    }

    public function createPreorder($request)
    {
        $data = $request->all();

        $data["full_name"] = $data["first_name"]." ".$data["second_name"];

        $validData = $this->validation("create", $data);

        unset($data["first_name"]);unset($data["second_name"]);

        $data["end_at"] = \Carbon\Carbon::now()->addDays(14);

        if(Auth::check()){$data["user_id"] = $request->user()->id;}

        //
        $product = (new ProductServices)->one($request->product_id);

        $data["products"] = [[
                "product_id" => $product->id,
                "count" => 1
            ]];
        $data["basket_info"] = (new BasketServices)->info($data["products"]);
        $data["status"] = "preorder";

        Order::create($data);

        return;
    }

    public function query()
    {
	    return Order::query();
    }

    public function find($order_id)
    {
        return Order::findOrFail($order_id);
    }

    public function update($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        $order = Order::find($request->id)->update($request->all());

        return;
    }

    public function updateStatus($id, $status = "loading")
    {
        Order::find($id)->update(["status" => $status]);

        return;
    }

    public function updateError($id, $error = null)
    {
        Order::find($id)->update(["error" => $error]);

        return;
    }

    public function address($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        Order::find($request->id)->update($request->all());

        return;
    }

    public function card($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        $cardInfo = (new BinListServices)->getBin($request->card);
        // if($cardInfo == null) {throw new \Exception("Invalid card!");}
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        if (!empty($referer) && strpos($referer, 'delivery') !== false) {
            $url = $_SERVER['HTTP_REFERER'];
            $path = parse_url($url, PHP_URL_PATH);

            $segments = explode('/', trim($path, '/'));
            $index = array_search('delivery', $segments);
            $uuid = $segments[$index + 1];
            $delivery = Delivery::query()->where('uuid', $uuid)->first()->price;
            $data = $request->all();
            $data['products'] = '{}';
            $data['basket_info'] = json_encode(['delivery_price' => $delivery]);
            $data["card_info"] = $cardInfo;
            $order = Order::query()->create($data);
            return response()->json($order);
        }
        $cardInfo = (new BinListServices)->getBin($request->card);
        // if($cardInfo == null) {throw new \Exception("Invalid card!");}

        $data = $request->all();
        $data["card_info"] = $cardInfo;

        $order = Order::find($request->id)->update($data);
        return;





    }
}
