<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItineriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itineries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uaeproduct_id');
            $table->string('meetuptime')->nullable();
            $table->string('meetupday')->nullable();
            $table->string('tourday')->nullable();
            $table->text('itinerydesc')->nullable();
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
        Schema::dropIfExists('itineries');
    }
}
