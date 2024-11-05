<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderServices;
use App\Http\Services\BasketServices;
use App\Http\Services\ProductServices;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        $order = (new OrderServices)->find($request->id);
        if(Auth::check() && $request->user()->id != $order->user_id || !Auth::check() && $order->user_id != null) {abort(404);}
        //$products = (new ProductServices)->getByIds($productList)->get();

        return view('pages.checkouts', compact("order"));
    }


    public function create(Request $request)
    {
        return (new OrderServices)->create($request);
    }

    public function address(Request $request)
    {
        return (new OrderServices)->address($request);
    }

    public function card(Request $request)
    {
        return (new OrderServices)->card($request);
    }

    // public function show(Request $request)
    // {
    //     $orders = (new OrderServices)->get();
    //     $orders = $orders->where("user_id", $request->user()->id)->orderBy('id', 'desc')->get();

    //     return view('pages.lk.orders', compact("orders"));
    // }

    // public function preorder(Request $request)
    // {
    //     (new OrderServices)->createPreorder($request);
    //     return;
    // }
}
