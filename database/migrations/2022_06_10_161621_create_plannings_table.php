<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->integer('Lundi');
            $table->integer('Mardi');
            $table->integer('Mercredi');
            $table->integer('Jeudi');
            $table->integer('Vendredi');
            $table->integer('Samedi');
            $table->integer('Dimanche');
            $table->integer('Employee')->unique;
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
        Schema::dropIfExists('plannings');
    }
}
