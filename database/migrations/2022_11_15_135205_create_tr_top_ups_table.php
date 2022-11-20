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
        Schema::create('tr_top_ups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jenis_transaksi')->unique()->constrained('jenis_transaksis')->onUpdate('cascade')->onDelete('restrict');
            $table->string('pembelian');
            $table->string('no_hp', 13);
            $table->string('nama_pelanggan');
            $table->bigInteger('nilai_topup');
            $table->bigInteger('admin_fee')->nullable(); // Go Pay, OVO, Shopeepay
            $table->string('no_reff')->nullable(); // Go Pay, Shopeepay
            $table->string('transaction_id')->nullable(); // DANA
            $table->string('dana_order_id')->nullable(); // DANA
            $table->bigInteger('total_dibayar');
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
        Schema::dropIfExists('tr_top_ups');
    }
};
