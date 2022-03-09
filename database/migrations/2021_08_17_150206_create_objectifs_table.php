<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectifs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('objectif_id')->nullable();
            $table->unsignedBigInteger('formation_id')->nullable();
            $table->string('name');
            $table->boolean('published')->default(1);
            $table->foreign('formation_id')->references('id')->on('formations');
            $table->foreign('objectif_id')->references('id')->on('objectifs');
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
        Schema::dropIfExists('objectifs');
    }
}
