<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteStatsTable extends Migration
{
    public function up()
    {
        Schema::create('site_stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('route');
            $table->string('action');
            $table->string('ip');
            $table->boolean('api')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('site_stats');
    }
}
