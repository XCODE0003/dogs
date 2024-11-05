<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Log;

use App\Http\Controllers\Controller;
use App\Http\Services\SaveFileServices;

class SummernoteFileController extends Controller
{
    public function download(Request $request) 
    {
        $path = "/storage/images/summernote/";
        $imgName = (new SaveFileServices)->saveOne($request->file('file'), $path);
        return $path.$imgName;
    }
}
