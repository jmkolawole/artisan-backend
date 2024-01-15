<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Traits\SendsApiResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    use SendsApiResponse;
    public function categories () {
      $categories = Category::all();
      return $this->successResponse($categories);
    }
}
