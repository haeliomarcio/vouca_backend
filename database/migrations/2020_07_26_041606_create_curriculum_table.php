<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf');
            $table->string('sector')->nullable();
            $table->string('telephone');
            $table->string('email');
            $table->string('cep');
            $table->string('address');
            $table->string('number');
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->string('document_path');
            $table->text('description');
            $table->unsignedBigInteger('jobs_deployment_id');
            $table->foreign('jobs_deployment_id')->references('id')->on('jobs_employment');
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
        Schema::dropIfExists('curriculum');
    }
}

