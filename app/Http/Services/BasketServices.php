<?php

namespace App\Http\Services;

use App\Http\Services\ProductServices;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Collection;

class BasketServices
{
    public function add($request)
    {
        $product = (new ProductServices)->one($request->product_id);
        $productList = $this->get();

        $sum = 0;
        if($request->type == "full")
        {
            $sum = $product->price;
        } else
        {
            $sum = 1000;
        }

        if($productList)
        {
            $productList[] = [
                "product_id" => $product->id,
                "count" => 1,
                "sum" => $sum,
                "type" => $request->type,
            ];
        } else
        {
            $productList = [];
            $productList[] = [
                "product_id" => $product->id,
                "count" => 1,
                "sum" => $sum,
                "type" => $request->type,
            ];
        }

        $this->create($productList);
        return $productList;
    }

    public function count($request)
    {
        $productList = $this->get();
        foreach($productList as $key => $productInfo)
        {
            if($productInfo["product_id"] == $request->product_id)
            {
                $productList[$key]["count"] = $request->count;
                if($productList[$key]["count"] <= 0)
                {
                    $productList[$key]["count"] = 1;
                }
                break;
            }
        }
        $this->create($productList);
        return $productList;
    }

    public function create($productList)
    {
        $productList = $this->unique($productList);
        cookie()->queue('basketList', json_encode($productList), 8400600);
        return;
    }

    public function unique($productList)
    {
        $uniqueArray = Collection::make($productList)->unique('product_id')->values()->all();
        return $uniqueArray;
    }

    public function get()
    {
        $productList = json_decode(Cookie::get('basketList'), true);

        return $productList;
    }

    public function getIds()
    {
        $productList = $this->get();
        if(!$productList){return [];}
        $ids = [];
        foreach($productList as $product)
        {
            $ids[] = $product["product_id"];
        }

        return $ids;
    }

    public function delete($productID)
    {
        $productList = $this->get();
        if(!$productList){return;}

        foreach($productList as $key => $product)
        {
            if($product['product_id'] == $productID)
            {
                unset($productList[$key]);
            }
        }

        $this->create($productList);
        return $productList;
    }

    public function distroy()
    {
        cookie()->queue('basketList', null, 8400600);
        return;
    }

    public function info($productList = null)
    {
        if(!$productList)
        {
            $productList = $this->get();
        }
        $sum_deposit = 1000;

        $col = 0; $sum = 0; $all_sum = 0; $discount = 0; $sum_product = 0;
        $delivery = 0;
        foreach($productList as $info)
        {
            $product = (new ProductServices)->one($info["product_id"]);
            $col = $col + $info["count"];

            if($info["type"] == "deposit")
            {
                $sum_new = $sum_deposit * $info["count"];
            } else
            {
                $sum_new = $product->price * $info["count"];
            }


            $all_sum += $sum_new;
            $sum += $sum_new;
            $sum_product += $sum_new;
        }

        $sum += $delivery;
        $all_sum += $delivery;

        return [
            "all_sum" =>  $all_sum,
            "sum" => $sum,
            "discount" => $discount,
            "col" => $col,
            "sum_product" => $sum_product,
            "delivery" => $delivery
        ];
    }
}
