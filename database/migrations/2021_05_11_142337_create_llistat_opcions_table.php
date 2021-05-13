<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlistatOpcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llistat_opcions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activitat_id')->references('id')->on('activitats');
            $table->foreignId('opcio_id')->references('id')->on('opcions');
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
        Schema::dropIfExists('llistat_opcions');
    }
}
