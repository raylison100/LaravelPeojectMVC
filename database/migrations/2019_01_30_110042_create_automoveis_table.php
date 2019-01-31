<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoveis', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('modelo', 20)->nullable(false);
            $table->string('marca', 20)->nullable(false);
            $table->string('tipo', 20)->nullable(false);
            $table->string('ano')->nullable(false);
            $table->string('placa',20)->unique()->nullable(false);;
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
        Schema::dropIfExists('automoveis');
    }
}
