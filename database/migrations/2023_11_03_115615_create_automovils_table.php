<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomovilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoviles', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 10)->unique();
            $table->string('marca', 120);
            $table->string('modelo', 120);
            $table->string('color', 120);
            $table->string('precio', 120);
            $table->unsignedBigInteger('nivel_id');
            $table->timestamps();

            $table->foreign('nivel_id')->references('id')->on('niveles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automoviles');
    }
}
