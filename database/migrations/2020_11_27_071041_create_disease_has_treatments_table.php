<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseHasTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_has_treatments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_disease');
            $table->foreign('id_disease')
                ->references('id')
                ->on('diseases')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_treatment');
            $table->foreign('id_treatment')
                ->references('id')
                ->on('treatments')
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
        Schema::dropIfExists('disease_has_treatments');
    }
}
