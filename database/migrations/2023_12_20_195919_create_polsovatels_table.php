<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolsovatelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polsovatels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('otch');
            $table->integer('age');
            $table->text('specialization');
            $table->string('steck');
            $table->string('city');
            $table->string('country');
            $table->string('gender');
            $table->string('status');
            $table->string('adress');
            $table->integer('tel');
            $table->string('email');

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
        Schema::dropIfExists('polsovatels');
    }
}
