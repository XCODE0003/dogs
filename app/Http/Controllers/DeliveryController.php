<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderServices;
use App\Http\Services\BasketServices;
use App\Http\Services\ProductServices;
use App\Models\delivery;
use Illuminate\Http\Request;
use Auth;

class DeliveryController extends Controller
{
    public function index($uuid)
    {
        $delivery = delivery::query()->where('uuid', $uuid)->first();
        if (!$delivery) {
            return redirect('/');
        }

        return view('pages.checkouts_delivery', ['order' => $delivery]);
    }
}
