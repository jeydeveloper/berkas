<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipeBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_berkas', function (Blueprint $table) {
            $table->increments('tb_id');
            $table->string('tb_name', 200);
            $table->string('tb_created_user', 200);
            $table->string('tb_updated_user', 200);
            $table->dateTime('tb_created_at');
            $table->dateTime('tb_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipe_berkas');
    }
}
