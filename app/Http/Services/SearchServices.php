<?php

namespace App\Http\Services;

use App\Models\Product;
use App\Models\Catalog;


class SearchServices
{
    public function get($search, $fun)
    {
        if(!$search || $search == ""){throw new \Exception("Значение пустое!");}
        if(!in_array($fun, ["limit", "paginate"])){throw new \Exception("Способ не найден!");}

        $products = Product::where('title', 'LIKE', "%{$search}%");
        //$catalogs = Catalog::where('title', 'LIKE', "%{$search}%");

        if($fun == "limit")
        {
            $products = $this->limit($products);
            //$catalogs = $this->limit($catalogs);
        }

        if($fun == "paginate")
        {
            $products = $products->get();
            //$catalogs = $catalogs->get();
        }
        
        $items = $products;
        //$items = $items->merge($catalogs);
        
        return $items;
    }

    private function limit($request)
    {
        $request = $request->limit(10)->get();
        return $request;
    }
}
