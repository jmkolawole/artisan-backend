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
    $kolawole->is_admin = 1;
    $kolawole->save();


    $uzo = new User();
    $uzo->firstname = 'Uzo';
    $uzo->lastname = 'Uzo';
    $uzo->username = 'uzo';
    $uzo->email = 'uzo12@gmail.com';
    $uzo->password = bcrypt('Pa$$w0rd');
    $uzo->is_admin = 1;
    $uzo->save();

    $carpenter = new User();
    $carpenter->firstname = 'Carpenter';
    $carpenter->lastname = 'Carpenter';
    $carpenter->username = 'carpenter';
    $carpenter->email = 'carpenter@gmail.com';
    $carpenter->password = bcrypt('Pa$$w0rd');
    $carpenter->save();

    $plumber = new User();
    $plumber->firstname = 'Plumber';
    $plumber->lastname = 'Plumber';
    $plumber->username = 'Plumber';
    $plumber->email = 'plumber@gmail.com';
    $plumber->password = bcrypt('Pa$$w0rd');
    $plumber->save();
    
  }
}
