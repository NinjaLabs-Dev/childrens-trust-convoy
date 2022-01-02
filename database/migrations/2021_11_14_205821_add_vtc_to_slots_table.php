<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVtcToSlotsTable extends Migration
{
    public function up()
    {
        Schema::table('slots', function (Blueprint $table) {
            $table->foreignId('vtc')->nullable()->references('id')->on('vtcs')->cascadeOnUpdate()->cascadeOnUpdate();
        });
    }

    public function down()
    {
        Schema::table('slots', function (Blueprint $table) {
            $table->dropForeign('vtc');
        });
    }
}
