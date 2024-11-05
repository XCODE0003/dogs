<?php

namespace App\Http\Services\Validation;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function validation($functionName, $request, $user = null)
    {
        $data = $this->validation->$functionName($request, $user);
        if ($data->fails())
            throw new ValidationException($data);

        return $data->validated();
    }

    public function extraFields($rules, $data)
    {
        foreach ($data as $key => $value)
        {
            if(!isset($rules[$key]))
            {
                $rules[$key] = "sometimes|boolean|string|email";
            }
        }

        return $rules;
    }

    // public function runValidator($request) {
    //     $currentAction = Route::currentRouteAction();
    //     // Log::debug($currentAction);
    //     list($controller, $method) = explode('@', $currentAction);
    //     return $this->validation->$method($request);
    // }
}
