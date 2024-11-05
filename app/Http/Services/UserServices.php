<?php

namespace App\Http\Services;

use App\Http\Services\Validation\Controller as Validation;
use App\Http\Validations\UserServicesValidations;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Services\PromocodeServices;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserServices extends Validation
{
    // public function __construct()
    // {
    //     $this->validation = new UserServicesValidations();

    public function find($id)
    {
        return User::findOrFail($id);
    }

    public function query()
    {
        return User::query();
    }
}
