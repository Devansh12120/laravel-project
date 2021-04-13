<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavehoteldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savehoteldetails', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->string('checkin');
            $table->string('checkout');
            $table->string('adults');
            $table->string('children');
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
        Schema::dropIfExists('savehoteldetails');
    }
}
