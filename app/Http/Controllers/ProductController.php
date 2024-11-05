<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryServices;
use App\Http\Services\ProductServices;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug = null)
    {
        $product = (new ProductServices)->find($slug);
        $productsCatrgory = (new ProductServices)->get()->where("category_id", $product->category_id)->get();
        return view('pages.product', compact('product', 'productsCatrgory'));
    }
}
