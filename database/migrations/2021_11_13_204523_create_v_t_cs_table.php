<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVTCsTable extends Migration
{
    public function up()
    {
        Schema::create('vtcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->foreignId('slot')->nullable()->references('id')->on('slots')->cascadeOnUpdate()->cascadeOnUpdate();
            $table->integer('truckersmp_id');
            $table->bigInteger('expected_attendance');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vtcs');
    }
}
