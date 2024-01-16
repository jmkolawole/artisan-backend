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
      $table->string('first_name')->nullable();
      $table->string('last_name')->nullable();
      $table->string('email')->unique();
      $table->unsignedSmallInteger('category_id')->nullable();
      $table->string('location')->nullable();
      $table->string('phone')->nullable();
      $table->string('is_admin')->default(0);
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
