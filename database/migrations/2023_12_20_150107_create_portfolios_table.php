<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('Kompaniya');
            $table->text('Opisanie');
            $table->string('Image')->nullable();
            $table->unsignedBigInteger('Prosmotry');
            $table->integer('Posetiteli')->nullable();
            $table->boolean('Opublikovan_li')->default(1);
            $table->boolean('chto-to')->default(0);
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
        Schema::dropIfExists('portfolios');
    }
}
