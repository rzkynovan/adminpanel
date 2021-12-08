<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_table', function (Blueprint $table) {
            $table->id();
            $table->string('kartu_ktp');
            $table->string('kartu_askes')->nullable();
            $table->string('kartu_bpjs')->nullable();
            $table->string('kartu_identitas')->nullable();
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
        Schema::dropIfExists('kartu_table');
    }
}
