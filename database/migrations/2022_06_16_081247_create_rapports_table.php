<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id')->unsigned();
            $table->integer('heures_faites')->default(0);
            $table->integer('heures_d_absence')->default(0);
            $table->integer('taux_d_assiduite')->default(0);

            $table->integer('freq_dues_mensuel')->default(0);
            $table->integer('freq_dues_hebbdo')->default(0);
            $table->integer('freq_faites')->default(0);
            $table->integer('freq_nFaites')->default(0);
            $table->integer('taux de ponctualite')->default(0);
            $table->integer('Observation')->default(0);

            $table->foreign('emp_id')->references('id')->on('personnels')->onDelete('cascade');
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
        Schema::dropIfExists('rapports');

        Schema::table('rapports', function (Blueprint $table) {
            $table->dropForeign(['emp_id']);
           });
    }
}
