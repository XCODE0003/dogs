<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Log;

use App\Http\Controllers\Controller;
use App\Http\Services\ReviewServices;
use App\Http\Services\CategoryServices;

class ReviewController extends Controller
{
    public function index()
    {
        $categoryes = (new CategoryServices)->get()->get();
        return view('admin.pages.review.index', compact("categoryes"));
    }

    public function get()
    {
        return datatables((new ReviewServices)->query()->with('category')->whereHas('category')->get())->toJson();
    }

    //

    public function show($id = null)
    {
        $categoryes = (new CategoryServices)->get()->get();
        $item = (new ReviewServices)->find($id);

        return view('admin.pages.review.one', compact('item', 'categoryes'));
    }

    //

    public function create(Request $request)
    {
        (new ReviewServices)->create($request);
        return;
    }

    public function delete($id = null)
    {
        (new ReviewServices)->delete($id);
        return redirect()->back()->with('success', 'Успешно!');
    }

    public function update(Request $request)
    {
        (new ReviewServices)->update($request);
        return;
    }
}
