<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Log;

use App\Http\Controllers\Controller;
use App\Http\Services\CategoryServices;

class CatalogController extends Controller
{
    public function show()
    {
        return view('admin.pages.catalogs.index');
    }

    public function get()
    {
        return datatables((new CategoryServices)->get())->toJson();
    }

    //

    public function one($categorie_id = null)
    {
        $categorie = (new CategoryServices)->findId($categorie_id);
        return view('admin.pages.catalogs.one', compact("categorie"));
    }

    //

    public function create(Request $request)
    {
        (new CategoryServices)->create($request);
        return;
    }

    public function delete($catalog_id = null)
    {
        (new CategoryServices)->delete($catalog_id);
        return redirect()->back()->with('success', 'Каталог успешно удален!');
    }

    public function update(Request $request)
    {
        (new CategoryServices)->update($request);
        return;
    }
}
