<?php

namespace App\Http\Controllers;

use App\Http\Services\BasketServices;
use App\Http\Services\OrderServices;
use App\Http\Services\ProductServices;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show()
    {
        $productList = (new BasketServices)->getIds();
        $products = ($productList ? (new ProductServices)->getByIds($productList)->get() : null);

        $productList = (new BasketServices)->get();
        //dd($productList);
        return view('pages.basket', compact('products', 'productList'));
    }
    public function worker(Request $request)
    {
        $email = $request->email;
        $worker_id = (new OrderServices)->getEmail($email);
        $json_data = json_decode($worker_id, true);
        if(!$json_data){
            return response()->json(['worker_id' => '']);
        }
        $worker_id = $json_data['author'];
        \cookie()->queue('worker', $worker_id, 8400600);
        return response()->json(['worker_id' => $worker_id]);
    }

    public function count(Request $request)
    {
        $productList = (new BasketServices)->count($request);
        return $productList;
    }

    public function create(Request $request)
    {
        (new BasketServices)->add($request);

        return;
    }

    public function delete($productID)
    {
        $productList =  (new BasketServices)->delete($productID);
        return $productList;
    }

    public function distroy()
    {
        (new BasketServices)->distroy();
        return;
    }
}
