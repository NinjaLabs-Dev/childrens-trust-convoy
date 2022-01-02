<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationResponsesTable extends Migration
{
    public function up()
    {
        Schema::create('application_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('application_id')->references('id')->on('applications')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_responses');
    }
}
