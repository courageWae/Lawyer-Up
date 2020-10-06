<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_client');
            $table->string('email_of_client');
            $table->string('user_id');
            $table->string('phone_of_client');
            $table->mediumText('photo_of_client');
            $table->string('phone_of_lawyer');
            $table->string('name_of_lawyer');
            $table->string('email_of_lawyer');
            $table->mediumText('photo_of_lawyer');
            $table->string('lawyer_id');
            $table->string('type_of_lawyer');
            $table->string('call_credits');
            $table->string('date');
            $table->string('timeslot');
            $table->string('status');
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
        Schema::dropIfExists('bookings');
    }
}
