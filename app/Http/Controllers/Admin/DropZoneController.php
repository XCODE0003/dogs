<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Log;

use App\Http\Controllers\Controller;
use App\Http\Services\DropZoneServices;
use App\Models\ProductPhoto;

class DropZoneController extends Controller
{
    public function create(Request $request) 
    {
        return (new DropZoneServices)->save($request, ProductPhoto::PATH);
    }

    public function delete(Request $request) 
    {
        return (new DropZoneServices)->delete($request);
    }
}
