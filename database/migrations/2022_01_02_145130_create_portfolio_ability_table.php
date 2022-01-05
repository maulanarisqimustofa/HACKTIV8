<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioAbilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_ability', function (Blueprint $table) {
            $table->bigIncrements('id_portfolio_ability');
            //membuat FK dari id_buku dan id_tag       
            $table->unsignedBigInteger('id_portfolio');
            $table->unsignedBigInteger('id_ability');
            $table->timestamps();
            //tag_buku ke buku
            $table->foreign('id_portfolio')->references('id_portfolio')
            ->on('portfolio')
            ->onDelete('cascade')->onUpdate('cascade'); 
            //tag_buku ke tag
            $table->foreign('id_ability')->references('id_ability')
            ->on('ability')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_ability');
    }
}
