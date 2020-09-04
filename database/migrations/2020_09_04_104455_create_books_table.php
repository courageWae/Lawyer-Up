<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_client');
            $table->string('phone_of_client');
            $table->string('name_of_lawyer');
            $table->string('type_of_lawyer');
            $table->string('call_credits');
            $table->string('expectance');
            $table->string('status');
            $table->timestamps();
            $table->string('date_approved');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
