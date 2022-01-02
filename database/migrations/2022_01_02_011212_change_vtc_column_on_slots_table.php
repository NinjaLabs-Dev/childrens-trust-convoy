<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeVtcColumnOnSlotsTable extends Migration
{
    public function up()
    {
        Schema::table('slots', function (Blueprint $table) {
            $table->dropColumn('vtc');
        });

        Schema::table('slots', function (Blueprint $table) {
            $table->string('vtc')->default(null);
        });
    }

    public function down()
    {
        Schema::table('slots', function (Blueprint $table) {
            $table->dropColumn('vtc');
        });

        Schema::table('slots', function (Blueprint $table) {
            $table->integer('vtc')->default(0);
        });
    }
}
