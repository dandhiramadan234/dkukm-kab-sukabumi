<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->string('nama_pemilik');
            $table->string('nik');
            $table->string('no_handphone');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('status_perkawinan');
            $table->string('pendidikan');
            $table->string('alamat_rumah');
            $table->string('alamat_usaha');
            $table->string('jenis_sektor');
            $table->string('jenis_usaha');
            $table->string('bentuk_hukum_perusahaan');
            $table->string('no_ijin_usaha');
            $table->json('kepemilikan_ijin_usaha');
            $table->integer('tenaga_kerja_tetap_perempuan');
            $table->integer('tenaga_kerja_tetap_laki_laki');
            $table->integer('tenaga_kerja_lepas_perempuan');
            $table->integer('tenaga_kerja_lepas_laki_laki');
            $table->string('modal_awal_usaha');
            $table->string('volume_produksi');
            $table->string('satuan_volume_produksi');
            $table->string('omzet_penjualan');
            $table->string('quantity_penjualan');
            $table->string('keuntungan_bersih');
            $table->string('asset_tanah_bangunan');
            $table->string('asset_mesin_peralatan');
            $table->string('asset_kendaraan');
            $table->json('daerah_pemasaran');
            $table->json('kemitraan');
            $table->string('pelatihan');
            $table->string('status_umkm');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
