<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->increments('brks_id');
            $table->string('brks_name', 200);
            $table->string('brks_name_npwp', 200)->nullable();
            $table->string('brks_npwp_nop', 200)->nullable();
            $table->string('brks_jenis_ketetapan', 200)->nullable();
            $table->string('brks_no_ketetapan', 200)->nullable();
            $table->string('brks_jenis_pajak', 200)->nullable();
            $table->string('brks_masa_pajak', 200)->nullable();
            $table->string('brks_tahun_pajak', 200)->nullable();
            $table->string('brks_nama_kpp', 200)->nullable();
            $table->date('brks_tanggal_surat_wp')->nullable();
            $table->date('brks_tgl_diterima_kpp')->nullable();
            $table->date('brks_tgl_diterima_kanwil')->nullable();
            $table->date('brks_tgl_diterima_peneliti')->nullable();
            $table->string('brks_peneliti', 200)->nullable();
            $table->date('brks_jatuh_tempo_surat_wp')->nullable();
            $table->date('brks_jatuh_tempo_lpad')->nullable();
            $table->date('brks_jatuh_tempo_jp_reguler')->nullable();
            $table->string('brks_no_laporan', 200)->nullable();
            $table->string('brks_no_sk', 200)->nullable();
            $table->string('brks_putusan', 200)->nullable();
            $table->string('brks_kelengkapan_berkas', 200)->nullable();
            $table->string('brks_created_user', 200)->nullable();
            $table->string('brks_updated_user', 200)->nullable();
            $table->dateTime('brks_created_at');
            $table->dateTime('brks_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas');
    }
}
