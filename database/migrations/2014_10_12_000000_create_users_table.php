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
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('insurer')->nullable();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('house_address')->nullable();
            $table->string('education')->nullable();
            $table->string('type_of_lawyer')->nullable();
            $table->string('experience')->nullable();
            $table->string('personal_statement')->nullable();
            $table->mediumText('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
