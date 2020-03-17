<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegulationAffectionDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'regulation_affection_degrees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('notes')->nullable();
            $table->integer('regulation_element_id')->unsigned();
            $table->foreign('regulation_element_id')->references('id')->on('regulation_elements')->onDelete('cascade');
            $table->float('value_per_day', 6, 3)->nullable();
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
        Schema::dropIfExists('affection_degrees');
    }
}
