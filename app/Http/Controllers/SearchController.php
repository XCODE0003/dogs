<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\SearchServices;
use App\Http\Services\ProductServices;

class SearchController extends Controller
{
    public function index()
    {
        return view('pages.search.main');
    }

    // public function get(Request $request)
    // {
    //     $items = (new SearchServices)->get($request->search, "limit");

    //     return $items;
    // }

    // public function paginateGet(Request $request)
    // {
    //     [$items, $paginate] = $this->paginate($request->page, $request->search);

    //     return view('components.search', compact("items", "paginate"));
    // }

    // public function show(Request $request)
    // {
    //     [$items, $paginate] = $this->paginate($request->page, $request->search);

    //     return view('pages.search', compact("items", "paginate"));
    // }

    public function show(Request $request)
    {
        $search = $request->search;
        $products = (new ProductServices)->get();
        $products = $products->where('title', 'LIKE', "%{$search}%")->whereHas('category', function($q){
            $q->where('taxi', '0');
        })->paginate(12);
        
        return view('pages.search.index', compact("products", "search"));
    }

    // public function paginate($page, $search)
    // {
    //     $paginate = 20;

    //     $page = ((int)$page ? $page : 1);

    //     if(!$search || $search == "")
    //     {
    //         $search = "-----------------";
    //     }

    //     $items = (new SearchServices)->get($search, "paginate");
    //     $count = count($items);

    //     $items = $items->chunk($paginate);
    //     $pageCount = count($items);

    //     if($items && $items->count()){
    //         $items = $items[($page - 1)];

    //         $paginate = [
    //             "pageCount" => $pageCount,
    //             "itemCount" => $count,
    //             "page" => $page,
    //             "search" => $search
    //         ];
    //     } else {
    //         $paginate = null;
    //     }
        
    //     return [$items, $paginate];
    // }
}
