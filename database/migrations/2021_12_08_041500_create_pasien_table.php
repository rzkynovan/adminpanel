<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_table', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name');
            $table->bigInteger('cus_number')->uniqid();
            $table->string('cus_phone', 14)->uniqid();
            $table->string('cus_address');
            $table->string('cus_riwayat')->nullable();
            $table->string('cus_penyakit');
            $table->bigInteger('kartu_id');
            $table->softDeletes();
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
        Schema::dropIfExists('pasien_table');
    }
}
