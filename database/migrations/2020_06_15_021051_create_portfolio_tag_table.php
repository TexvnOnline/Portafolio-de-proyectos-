<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('portfolio_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_tag');
    }
}
