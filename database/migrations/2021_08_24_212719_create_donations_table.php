<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('raisedPercent');
            $table->bigInteger('raisedTotal');
            $table->bigInteger('donation_id')->unique();
            $table->string('donation_name');
            $table->longText('donation_message');
            $table->string('donation_amount');
            $table->string('donation_country_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
