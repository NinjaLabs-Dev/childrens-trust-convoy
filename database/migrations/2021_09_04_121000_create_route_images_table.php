<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteImagesTable extends Migration
{
    public function up()
    {
        Schema::create('route_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('dir');
            $table->string('url');
            $table->string('mime');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('route_images');
    }
}
