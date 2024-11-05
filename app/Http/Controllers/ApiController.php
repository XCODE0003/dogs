<?php

namespace App\Http\Controllers;

use App\Models\delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $data = $data['data'];
        $data['UUID'] = strtoupper(Str::random(9));
        $delivery = delivery::query()->create($data);
        return response()->json($delivery);
    }
}
