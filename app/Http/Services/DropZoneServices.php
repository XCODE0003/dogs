<?php

namespace App\Http\Services;


use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\DropZoneServicesValidations;
use App\Models\ProductPhoto;
use App\Http\Services\SaveFileServices;

class DropZoneServices extends Validation
{
    public function __construct()
    {
        $this->validation = new DropZoneServicesValidations();
    }

    public function save($request, $path)
    {
        $validData = $this->validation(__FUNCTION__, $request);
        
        $imgName = (new SaveFileServices)->saveOne($request->file('file'), $path);
        $imgName = (new SaveFileServices)->resize($path."/", $imgName, 250, 250);

        $productPhoto = ProductPhoto::create([
            "path" => $imgName,
            "product_id" => $request->uid
        ]);
        return [
            "url" => $productPhoto->path,
            "uid" => $productPhoto->id
        ];
    }

    public function delete($request)
    {
        $validData = $this->validation(__FUNCTION__, $request);

        ProductPhoto::findOrFail($request->uidPhoto)->delete();
        return;
    }
}