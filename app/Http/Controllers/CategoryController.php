<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryServices;
use App\Http\Services\ProductServices;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $slug = (isset($request->slug) ? $request->slug : null);
        $products = (new ProductServices)->get();
        $sort = $request->sort;
        view()->share('sort', $sort);
        if (!$slug) {
            view()->share('category', "ALL");
            $products->where('status', 'available')->with('category')->whereHas('category', function ($q) use ($slug) {
                $q = $q->where("taxi", 0);
            });
        } else {
            $products->with('category')->whereHas('category', function ($q) use ($slug) {
                $q = $q->where("slug", $slug)->where("taxi", 0);
            });
            $category = (new CategoryServices)->find($slug);
            view()->share('category', $category->title);
        }

        switch ($sort) {
            case "title-asc":
                $products->orderBy('title', 'asc');
                break;
            case "title-desc":
                $products->orderBy('title', 'desc');
                break;
            case "price-asc":
                $products->orderBy('price', 'asc');
                break;
            case "price-desc":
                $products->orderBy('price', 'desc');
                break;
            case "created-asc":
                $products->orderBy('created_at', 'asc');
                break;
            case "created-desc":
                $products->orderBy('created_at', 'desc');
                break;
        }



        $products = $products->get();
        return view('pages.collections', compact('products'));
    }
}
