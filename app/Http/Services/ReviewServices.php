<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

use App\Models\Review;

use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\ReviewServicesValidations;

use Log;


class ReviewServices extends Validation
{
    public function __construct()
    {
        $this->validation = new ReviewServicesValidations();
    }

    public function query()
    {
	    return Review::query();
    }

    public function find($id)
    {
        return  Review::findOrFail($id);
    }

    public function create($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        $imgName = (new SaveFileServices)->saveOne($request->preview, Review::PATH, (isset($request->watermark) ? $request->watermark : false));
        $imgName = (new SaveFileServices)->resize(Review::PATH, $imgName, 380, 380);

        $item = Review::create($request->all());
        $item->preview = $imgName;
        $item->save();

        return;
    }

    public function delete($id)
    {
        Review::findOrFail($id)->delete();
        return;
    }

    public function update($request)
    {
        $model = Review::find($request->id);
        if($request['preview'] == 'undefined'){
            unset($request['preview']);
        }

        $validData = $this->validation(__FUNCTION__, $request);
        $model->update($request->all());
        // $model->update([
        //     "short_description" => $request->short_description,
        //     "price" => $request->price,
        //     "discount" => $request->discount,
        //     "status" => $request->status,
        //     "category_id" => $request->category_id,
        //     "description" => $request->description,
        // ]);

        if(isset($request['preview'])){
            $imgName = (new SaveFileServices)->saveOne($request->preview, Review::PATH, (isset($request->watermark) ? $request->watermark : false));
            $imgName = (new SaveFileServices)->resize(Review::PATH, $imgName, 380, 380);

            $model->preview = $imgName;
            $model->save();
        }

        return;
    }
}
