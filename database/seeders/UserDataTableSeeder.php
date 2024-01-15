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
    $kolawole->first_name = 'Kolawole';
    $kolawole->last_name = 'Oladapo';
    $kolawole->email = 'jmkolawole@gmail.com';
    $kolawole->age = 20;
    $kolawole->sex = 'male';
    $kolawole->phone = '07062612572';
    $kolawole->save();


    $uzo = new UserData();
    $uzo->id = 2;
    $uzo->first_name = 'Uzo';
    $uzo->last_name = 'Uzo';
    $uzo->email = 'uzo12@gmail.com';
    $uzo->age = 30;
    $uzo->sex = 'male';
    $uzo->phone = '07087512572';
    $uzo->save();


    $carpenter = new UserData();
    $carpenter->id = 3;
    $carpenter->first_name = 'Carpenter';
    $carpenter->last_name = 'Carpenter';
    $carpenter->email = 'carpenter@gmail.com';
    $carpenter->age = 40;
    $carpenter->sex = 'male';
    $carpenter->category_id = 1;
    $carpenter->phone = '09087512572';
    $carpenter->save();


    $plumber = new UserData();
    $plumber->id = 4;
    $plumber->first_name = 'Plumber';
    $plumber->last_name = 'Plumber';
    $plumber->email = 'plumber@gmail.com';
    $plumber->age = 35;
    $plumber->sex = 'male';
    $plumber->category_id = 2;
    $plumber->phone = '07056512572';
    $plumber->save();

  }
}
