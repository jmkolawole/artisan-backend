<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $kolawole = new User();
    $kolawole->firstname = 'Kolawole';
    $kolawole->lastname = 'Oladapo';
    $kolawole->username = 'korlahwarleh';
    $kolawole->email = 'jmkolawole@gmail.com';
    $kolawole->password = bcrypt('Pa$$w0rd');
    $kolawole->save();


    $anesi = new User();
    $anesi->firstname = 'Anesi';
    $anesi->lastname = 'Igebu';
    $anesi->username = 'gabriella';
    $anesi->email = 'anesi@gmail.com';
    $anesi->password = bcrypt('Pa$$w0rd');
    $anesi->save();
  }
}
