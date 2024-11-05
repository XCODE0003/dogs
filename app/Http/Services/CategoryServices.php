<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\CategoryServicesValidations;

use Log;


class CategoryServices extends Validation
{
    public function __construct()
    {
        $this->validation = new CategoryServicesValidations();
    }

    public function get()
    {
	    return Category::where("taxi", 0);
    }

    public function find($slug)
    {
        return Category::where('slug', $slug)->firstOrFail();
    }

    public function findId($id)
    {
        return Category::findOrFail($id);
    }

    public function create($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        $imgName = (new SaveFileServices)->saveOne($request->preview, Category::PATH, (isset($request->watermark) ? $request->watermark : false));
        $imgName = (new SaveFileServices)->resize(Category::PATH, $imgName, 100, 100);

        Category::create([
            'title' => $request->title,
            'preview' => $imgName,
        ]);

        return;
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        return;
    }

    public function update($request)
    {
        if($request['preview'] == 'undefined'){
            unset($request['preview']);
        }

        $validData = $this->validation(__FUNCTION__, $request);

        $model = Category::find($request->id);
        $model->update($request->all());

        if(isset($request['preview'])){

            $imgName = (new SaveFileServices)->saveOne($request->preview, Category::PATH, (isset($request->watermark) ? $request->watermark : false));
            $imgName = (new SaveFileServices)->resize(Category::PATH, $imgName, 100, 100);

            $model->preview = $imgName;
            $model->save();
        }

        return;
    }
}
