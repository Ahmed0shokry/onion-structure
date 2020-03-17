<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegulationElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regulation_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('notes')->nullable();
            $table->integer('regulation_class_id')->unsigned();
            $table->foreign('regulation_class_id')->references('id')->on('regulation_classes')->onDelete('cascade');
            $table->boolean('is_affect_attendance')->nullable();
            $table->tinyInteger('affected_type')->nullable();
            $table->tinyInteger('time_per_minutes')->nullable();
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
        Schema::dropIfExists('regulation_elements');
    }
}
