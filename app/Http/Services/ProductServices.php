<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\ProductServicesValidations;

use Log;


class ProductServices extends Validation
{
    public function __construct()
    {
        $this->validation = new ProductServicesValidations();
    }

    public function find($slug)
    {
        return Product::where('slug', $slug)->firstOrFail();
    }

    public function one($id)
    {
        return Product::findOrFail($id);
    }

    public function get()
    {
	    return Product::query();
    }

    public function create($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        $path = "/storage/images/products/preview/";
        $imgName = (new SaveFileServices)->saveOne($request->preview, Product::PATH, (isset($request->watermark) ? $request->watermark : false));
        $imgName = (new SaveFileServices)->resize(Product::PATH, $imgName, 380, 380);

        $product = Product::create($request->all());
        $product->preview = $imgName;
        $product->save();
        return;
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        return;
    }

    public function update($request)
    {
        $model = Product::find($request->id);
        if($model && $model->title == $request->title)
        {
            unset($request['title']);
        }


        if($request['preview'] == 'undefined'){
            unset($request['preview']);
        }

        $validData = $this->validation(__FUNCTION__, $request);

        $model->update([
            "price" => $request->price,
            "status" => $request->status,
            "category_id" => $request->category_id,
        ]);

        if(isset($request->title))
        {
            $model->update([
                "title" => $request->title,
                "slug" => null,
            ]);
        }

        if(isset($request['preview'])){
            $imgName = (new SaveFileServices)->saveOne($request->preview, Product::PATH, (isset($request->watermark) ? $request->watermark : false));
            $imgName = (new SaveFileServices)->resize(Product::PATH, $imgName, 250, 250);

            $model->preview = $imgName;
            $model->save();
        }

        return;
    }

    public function getByIds($productsID)
    {
        if(!$productsID)
        {
            return null;
        }

        $products = Product::whereIn('id', $productsID);

        return $products;
    }
}
