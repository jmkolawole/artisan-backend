<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_data', function (Blueprint $table) {
      $table->unsignedBigInteger('id')->primary();
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email')->unique();
      $table->unsignedSmallInteger('category_id')->nullable();
      $table->integer('age');
      $table->string('sex');
      $table->string('phone');
      $table->timestamps();

      $table->foreign('category_id')->references('id')->on('categories');
      $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('user_data');
  }
}
