<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVTCContactsTable extends Migration
{
    public function up()
    {
        Schema::create('vtc_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('vtc')->references('id')->on('vtcs')->cascadeOnUpdate()->cascadeOnUpdate();
            $table->string('name');
            $table->string('role');
            $table->text('discord');
            $table->text('truckersmp_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vtc_contacts');
    }
}
