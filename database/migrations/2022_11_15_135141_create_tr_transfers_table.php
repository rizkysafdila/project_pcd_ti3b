<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jenis_transaksi')->unique()->constrained('jenis_transaksis')->onUpdate('cascade')->onDelete('restrict');
            $table->string('pengirim');
            $table->string('rek_tujuan');
            $table->string('bank_penerima');
            $table->string('penerima');
            $table->bigInteger('nominal');
            $table->integer('biaya_admin');
            $table->integer('biaya_jasa');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('tr_transfers');
    }
};
