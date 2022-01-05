<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZgradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zgradas', function (Blueprint $table) {
            $table->id();
            $table->string('ulica');
            $table->integer('brojStanova');
            $table->integer('brojSpratova');
            $table->string('predsednik');
            $table->foreignId('grad_id')->constrained('grads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zgradas');
    }
}
