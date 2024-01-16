<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use App\Models\UserFile;
use App\Traits\SendsApiResponse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
  //
  use SendsApiResponse;
  public function users()
  {
    $users = UserData::with('category', 'files')->where('is_admin',0)->get();
    return $this->successResponse(($users));
  }

  public function profile (Request $request) 
  {
    $id = $request->route('id');
    $user = UserData::with('category', 'files')->where('id', $id)->first();
    return $this->successResponse($user);
  }

  
  public function update(Request $request)
  {
    $id = $request->route('id');
    if ($request->image1) {
      $image1_saved = $this->addImage($request->image1);
      $this->storeImg($id, $image1_saved);
    }

    if ($request->image2) {
      $image2_saved = $this->addImage($request->image2);
      $this->storeImg($id, $image2_saved);
    }

    if ($request->image3) {
      $image3_saved = $this->addImage($request->image3);
      $this->storeImg($id, $image3_saved);
    }

    if ($request->image4) {
      $image4_saved = $this->addImage($request->image4);
      $this->storeImg($id, $image4_saved);
    }
    $userdata = UserData::where('id', $id)->first();
    $userdata->first_name = $request->first_name;
    $userdata->last_name = $request->first_name;
    $userdata->phone = $request->phone;
    $userdata->location = $request->location;
    $userdata->category_id = $request->category_id;

    
    $userdata->save();

    return $this->successResponse([], "Saved successfully");

  }

  public function addImage($base64File): string
  {
    $folderPath = public_path() . '/' . 'images/';
    $image_parts = explode(";base64,", $base64File);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];

    $image_base64 = base64_decode($image_parts[1]);
    $uniqid = uniqid();
    $file = 'images/'.$uniqid . '.' . $image_type;

    file_put_contents($file, $image_base64);

    return $file;
  }

  public function storeImg($id, $image)
  {
    $new = new UserFile();
    $new->image = $image;
    $new->user_id = $id;
    $new->save();
    return;
  }
}
