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
        Schema::create('visit_report', function (Blueprint $table) {
            $table->id();
            $table->longtext('bidang_layanan');
            $table->longtext('fungsi_layanan');
            $table->longtext('topik');
            $table->longtext('pihak_terlibat');
            $table->longtext('tujuan_kegiatan');
            $table->longtext('gambaran');
            $table->string('alamat');
            $table->string('tanggal');
            $table->string('anggota_keluarga');
            $table->longtext('evaluasi');
            $table->longtext('tindak_lanjut');
            $table->longtext('catatan');
            $table->string('guru')->unique();
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
        Schema::dropIfExists('visit_report');
    }
};
