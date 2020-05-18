<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 15)->unique();
            $table->string('barcode', 15)->nullable($value = true);
            $table->string('nama', 50);
            $table->bigInteger('kategori_id')->unsigned();
            $table->string('gambar');
            $table->decimal('harga', 20, 0)->unsigned();
            $table->integer('stok')->unsigned()->nullable($value = true);
            $table->text('keterangan')->nullable($value = true);
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
        Schema::dropIfExists('produks');
    }
}
