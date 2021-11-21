<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUaetoursproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uaetoursproducts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 300);
            $table->string('slug', 50);
            $table->string('date')->nullable();
            $table->string('price')->nullable();
            $table->string('desc')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->string('ldesc')->nullable();
            $table->string('days')->nullable();
            //Hotel Image Upload // did not update db yeaaa :) we need to run migraton yeah first rollback ok
            $table->string('hotelimage1')->nullable();
            $table->string('hotelimage2')->nullable();
            $table->timestamps();
            // to remove table from database and edit it. php artisan migrate:rollback
            //this will be for the itinery yeah ok not here  add days for what u want
            // to migrate or submit . php artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uaetoursproducts');
    }
}
