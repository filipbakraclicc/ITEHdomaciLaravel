<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObrisiKolonuKoordinateGrad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grads', function (Blueprint $table) {
            $table->dropColumn('koordinate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grads', function (Blueprint $table) {
            $table->after('postanskiBroj', function ($table) {
                $table->string('koordinate');
            });
        });
    }
}
