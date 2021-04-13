<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBussTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buss', function (Blueprint $table) {
            $table->id();
            $table->string('bus');
            $table->string('roadways');
            $table->string('Ticket_number');
            $table->string('Seat_number');
            $table->string('class');
            $table->date('Travelling_date');
            $table->time('Travelling_time');
            $table->float('amount');
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
        Schema::dropIfExists('buss');
    }
}
