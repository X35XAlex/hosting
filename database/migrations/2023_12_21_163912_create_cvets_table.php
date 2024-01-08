<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvets', function (Blueprint $table) {
            $table->id();
            $table->text('red');
            $table->text('green');
            $table->text('purple');
            $table->text('yellow');
            $table->text('black');
            $table->text('white');
            $table->text('grey');
            $table->text('orange');
            $table->text('blue');
            $table->text('violet');
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
        Schema::dropIfExists('cvets');
    }
}
