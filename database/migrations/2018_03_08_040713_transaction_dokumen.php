<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransactionDokumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tdokumen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('butir', 100);
            $table->text('nama_dokumen');
            $table->string('pemilik',100);
            $table->string('file_upload');
            $table->string('status',100);
            $table->string('tipe_dokumen',100);
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
        Schema::dropIfExists('tdokumen');
    }
}
