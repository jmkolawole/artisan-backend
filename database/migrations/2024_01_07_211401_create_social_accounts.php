<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialAccounts extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('social_accounts', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id')->unsigned();
      $table->string('social_id');
      $table->string('social_provider');
      $table->string('social_name');
      $table->timestamps();

      $table->foreign('user_id')
        ->references('id')
        ->on('users')
        ->onCascade('delete');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('social_accounts');
  }
}
