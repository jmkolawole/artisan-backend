<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 256);
            $table->string('lastname', 256);
            $table->string("email", 256)->unique();
            $table->string("username", 256)->unique();
            $table->string("password", 256)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp("last_login")->nullable();
            $table->boolean("status")->default(0);
            $table->boolean("is_admin")->default(0);
            $table->text("access_token")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
