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
    $carpenter = new Category();
    $carpenter->name = 'Carpenter';
    $carpenter->file_required = 3;
    $carpenter->save();

    $plumber = new Category();
    $plumber->name = 'Plumber';
    $plumber->file_required = 2;
    $plumber->save();
  }
}
