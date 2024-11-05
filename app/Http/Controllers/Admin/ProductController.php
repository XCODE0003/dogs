<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Log;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductServices;
use App\Http\Services\CategoryServices;
use App\Http\Services\CharacteristicServices;

class ProductController extends Controller
{
    public function show()
    {
        $categoryes = (new CategoryServices)->get()->get();
        return view('admin.pages.products.index', compact("categoryes"));
    }

    public function get()
    {
        return datatables((new ProductServices)->get()->with('category'))->toJson();
    }

    //

    public function one($product_id = null)
    {
        $categoryes = (new CategoryServices)->get()->get();
        $product = (new ProductServices)->one($product_id);
        
        return view('admin.pages.products.one', compact('product', 'categoryes'));
    }

    //

    public function create(Request $request)
    {
        (new ProductServices)->create($request);
        return;
    }

    public function delete($id = null)
    {
        (new ProductServices)->delete($id);
        return redirect()->back()->with('success', 'Товар успешно удален!');
    }

    public function update(Request $request)
    {
        (new ProductServices)->update($request);
        return;
    }
}
