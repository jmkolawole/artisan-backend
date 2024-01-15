<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use App\Traits\SendsApiResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    use SendsApiResponse;
    public function users ()
    {
      $users = UserData::with('category','files')->whereNotNull('category_id')->get();
      return $this->successResponse(($users));
    }
}
