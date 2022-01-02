<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('application_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('application_response_id')->references('id')->on('application_responses')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('key');
            $table->string('value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_answers');
    }
}
