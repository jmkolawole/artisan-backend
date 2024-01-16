<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $electricians = new Category();
    $electricians->name = 'Electricians';
    $electricians->file_required = 3;
    $electricians->save();

    $installers = new Category();
    $installers->name = 'Gas Installers';
    $installers->file_required = 2;
    $installers->save();

    $supervisors = new Category();
    $supervisors->name = 'Mechanical Supervisors';
    $supervisors->file_required = 3;
    $supervisors->save();

    $plumbers = new Category();
    $plumbers->name = 'Plumbers';
    $plumbers->file_required = 1;
    $plumbers->save();


  }
}
