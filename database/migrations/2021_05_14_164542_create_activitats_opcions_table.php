<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitatsOpcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activitats_opcions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activitat_id')->references('id')->on('activitats')->onDelete('cascade');
            $table->foreignId('opcio_id')->references('id')->on('opcions')->onDelete('cascade');
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
        Schema::dropIfExists('activitats_opcions');
    }
}
