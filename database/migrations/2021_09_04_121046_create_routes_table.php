<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number');
            $table->string('start');
            $table->bigInteger('start_time');
            $table->string('end');
            $table->string('image')->default('https://cdn.ninjalabs.dev/Wmp0V');
            $table->boolean('truckfest')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
