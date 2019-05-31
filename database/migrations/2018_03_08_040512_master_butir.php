<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterButir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mbutir', function (Blueprint $table) {
            $table->increments('id');
            $table->string('butir', 100);
            $table->text('elemen_penilaian');
            $table->text('baku_mutu');
            $table->text('keterangan');
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
        Schema::dropIfExists('mbutir');
    }
}
