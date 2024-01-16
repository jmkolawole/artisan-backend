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

    $leif = new User();
    $leif->firstname = 'Leif';
    $leif->lastname = 'Garner';
    $leif->username = 'leif';
    $leif->email = 'leifgarner@gmail.com';
    $leif->password = bcrypt('Pa$$w0rd');
    $leif->save();


    $hobert = new User();
    $hobert->firstname = 'Hobert';
    $hobert->lastname = 'Stevens';
    $hobert->username = 'hobert';
    $hobert->email = 'hobertst@gmail.com';
    $hobert->password = bcrypt('Pa$$w0rd');
    $hobert->save();


    $otha = new User();
    $otha->firstname = 'Otha';
    $otha->lastname = 'Lee';
    $otha->username = 'lee';
    $otha->email = 'otha@gmail.com';
    $otha->password = bcrypt('Pa$$w0rd');
    $otha->save();

    

    $moh = new User();
    $moh->firstname = 'Mohammed';
    $moh->lastname = 'Harmon';
    $moh->username = 'harmon';
    $moh->email = 'mohammed@gmail.com';
    $moh->password = bcrypt('Pa$$w0rd');
    $moh->save();
    

    $felix = new User();
    $felix->firstname = 'Felix';
    $felix->lastname = 'Chan';
    $felix->username = 'felix';
    $felix->email = 'felix@gmail.com';
    $felix->password = bcrypt('Pa$$w0rd');
    $felix->save();
    
  }
}
