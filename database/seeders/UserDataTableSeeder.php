<?php

namespace Database\Seeders;

use App\Models\UserData;
use Illuminate\Database\Seeder;

class UserDataTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $kolawole = new UserData();
    $kolawole->id = 1;
    $kolawole->email = 'jmkolawole@gamil.com';
    $kolawole->is_admin = 1;
    $kolawole->save();
    

    $uzo = new UserData();
    $uzo->id = 2;
    $uzo->email = 'uzo12@gmail.com';
    $uzo->is_admin = 1;
    $uzo->save();


    $leif = new UserData();
    $leif->id = 3;
    $leif->email = 'leifgarner@gmail.com';
    $leif->save();


    $hobert = new UserData();
    $hobert->id = 4;
    $hobert->email = 'hobertst@gmail.com';
    $hobert->save();


    $otha = new UserData();
    $otha->id = 5;
    $otha->email = 'otha@gmail.com';
    $otha->save();


    $moh = new UserData();
    $moh->id = 6;
    $moh->email = 'mohammed@gmail.com';
    $moh->save();


    $felix = new UserData();
    $felix->id = 7;
    $felix->email = 'felix@gmail.com';
    $felix->save();
    

  }
}
