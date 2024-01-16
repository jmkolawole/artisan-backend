<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
  //
  public function image($file_name)
  {
    //$path = public_path() . '/images/' . $file_name;
    return response()->file(public_path('images/'.$file_name));
  }
}

