<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseHasSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_has_symptoms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_disease');
            $table->foreign('id_disease')
                ->references('id')
                ->on('diseases')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_symptom');
            $table->foreign('id_symptom')
                ->references('id')
                ->on('symptoms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('disease_has_symptoms');
    }
}
