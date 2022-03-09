<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cible_id')->nullable();
            $table->unsignedBigInteger('formation_id')->nullable();
            $table->string('name');
            $table->boolean('published')->default(1);
            $table->foreign('formation_id')->references('id')->on('formations');
            $table->foreign('cible_id')->references('id')->on('cibles');
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
        Schema::dropIfExists('cibles');
    }
}
