<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Log;

use App\Http\Controllers\Controller;
use App\Http\Services\UserServices;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pages.user.index');
    }

    public function get()
    {
        return datatables((new UserServices)->query()->get())->toJson();
    }

    //

    public function show($id = null)
    {

        $item = (new UserServices)->find($id);
     
        return view('admin.pages.user.one', compact('item'));
    }
}
