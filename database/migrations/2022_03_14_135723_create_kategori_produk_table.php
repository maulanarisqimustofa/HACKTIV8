<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_produk', function (Blueprint $table) {
            $table->bigIncrements('id_kategori_produk');
            //membuat FK dari id_buku dan id_tag       
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_produk');
            $table->timestamps();
            //tag_buku ke buku
            $table->foreign('id_kategori')->references('id_kategori')
            ->on('kategori')
            ->onDelete('cascade')->onUpdate('cascade'); 
            //tag_buku ke tag
            $table->foreign('id_produk')->references('id_produk')
            ->on('produk')
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
        Schema::dropIfExists('kategori_produk');
    }
}
