<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_handphone')->nullable();
            $table->string('email')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('umur')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('alamat_rumah')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('jenis_sektor')->nullable();
            $table->string('jenis_usaha')->nullable();
            $table->string('bentuk_hukum_perusahaan')->nullable();
            $table->string('no_ijin_usaha')->nullable();
            $table->json('kepemilikan_ijin_usaha')->nullable();
            $table->integer('tenaga_kerja_tetap_perempuan')->nullable();
            $table->integer('tenaga_kerja_tetap_laki_laki')->nullable();
            $table->integer('tenaga_kerja_lepas_perempuan')->nullable();
            $table->integer('tenaga_kerja_lepas_laki_laki')->nullable();
            $table->string('modal_awal_usaha')->nullable();
            $table->string('volume_produksi')->nullable();
            $table->string('satuan_volume_produksi')->nullable();
            $table->string('omzet_penjualan')->nullable();
            $table->string('quantity_penjualan')->nullable();
            $table->string('keuntungan_bersih')->nullable();
            $table->string('asset_tanah_bangunan')->nullable();
            $table->string('asset_mesin_peralatan')->nullable();
            $table->string('asset_kendaraan')->nullable();
            $table->json('daerah_pemasaran')->nullable();
            $table->json('kemitraan')->nullable();
            $table->string('pelatihan')->nullable();
            $table->string('status_umkm')->nullable();
            $table->string('gen')->nullable();
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
