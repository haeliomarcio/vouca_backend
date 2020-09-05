<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->text('information');
            $table->string('address');
            $table->unsignedBigInteger('city_id');
            $table->string('lat');
            $table->string('lng');
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->foreign('city_id')->references('id')->on('city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store');
    }
}
