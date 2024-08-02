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
            $table->string('nama_umkm')->nullable()->index();
            $table->string('nama_pemilik')->nullable()->index();
            $table->string('nik')->nullable()->index();
            $table->string('nomor_kartu_keluarga')->nullable()->index();
            $table->string('no_handphone')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('tempat_lahir')->nullable()->index();
            $table->date('tanggal_lahir')->nullable()->index();
            $table->string('umur')->nullable()->index();
            $table->string('gen')->nullable()->index();
            $table->string('jenis_kelamin')->nullable()->index();
            $table->string('status_perkawinan')->nullable()->index();
            $table->string('pendidikan')->nullable()->index();
            $table->string('alamat_rumah')->nullable()->index();
            $table->string('alamat_usaha')->nullable()->index();
            $table->string('kecamatan')->nullable()->index();
            $table->string('kelurahan_desa')->nullable()->index();
            $table->string('kabupaten_kota')->nullable()->index();
            $table->string('provinsi')->nullable()->index();
            $table->string('jenis_sektor')->nullable()->index();
            $table->string('jenis_usaha')->nullable()->index();
            $table->string('jenis_usaha_lainnya')->nullable()->index();
            $table->string('bentuk_hukum_perusahaan')->nullable()->index();
            $table->string('npwp')->nullable()->index();
            $table->string('nomor_npwp')->nullable()->index();
            $table->string('nib')->nullable()->index();
            $table->string('nomor_nib')->nullable()->index();
            $table->string('pirt')->nullable()->index();
            $table->string('nomor_pirt')->nullable()->index();
            $table->string('halal')->nullable()->index();
            $table->string('nomor_halal')->nullable()->index();
            $table->string('sni')->nullable()->index();
            $table->string('nomor_sni')->nullable()->index();
            $table->string('bpom')->nullable()->index();
            $table->string('nomor_bpom')->nullable()->index();
            $table->string('hki')->nullable()->index();
            $table->string('nomor_hki')->nullable()->index();
            $table->integer('tenaga_kerja_tetap_perempuan')->nullable()->index();
            $table->integer('tenaga_kerja_tetap_laki_laki')->nullable()->index();
            $table->integer('tenaga_kerja_lepas_perempuan')->nullable()->index();
            $table->integer('tenaga_kerja_lepas_laki_laki')->nullable()->index();
            $table->string('modal_awal_usaha')->nullable()->index();
            $table->string('volume_produksi')->nullable()->index();
            $table->string('satuan_volume_produksi')->nullable()->index();
            $table->string('omzet_penjualan')->nullable()->index();
            $table->string('quantity_penjualan')->nullable()->index();
            $table->string('kategori_usaha')->nullable()->index();
            $table->string('keuntungan_bersih')->nullable()->index();
            $table->string('asset_tanah_bangunan')->nullable()->index();
            $table->string('asset_mesin_peralatan')->nullable()->index();
            $table->string('asset_kendaraan')->nullable()->index();
            $table->string('lokal')->nullable()->index();
            $table->string('lintas_kabupaten_kota')->nullable()->index();
            $table->string('lintas_provinsi')->nullable()->index();
            $table->string('export')->nullable()->index();
            $table->string('online')->nullable()->index();
            $table->string('pemasaran_online')->nullable()->index();
            $table->string('pembiayaan')->nullable()->index();
            $table->string('sumber_pembiayaan')->nullable()->index();
            $table->json('kemitraan')->nullable();
            $table->string('pelatihan')->nullable()->index();
            $table->string('jenis_pelatihan')->nullable()->index();
            $table->string('status_umkm')->nullable()->index();
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
