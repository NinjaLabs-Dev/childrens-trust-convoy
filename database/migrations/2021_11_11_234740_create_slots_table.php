<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotsTable extends Migration
{
    public function up()
    {
        Schema::create('slots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('public')->default(false);
            $table->integer('capacity')->nullable();
            $table->boolean('vacant')->default(true);
            $table->string('image')->default('https://cdn.ninjalabs.dev/Wmp0V');
            $table->string('vtc')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('slots');
    }
}
