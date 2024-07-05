<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Document;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Umkm extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'umkms';

    protected $guarded = [];

    public function scopeSearch($query, $term)
    {
        // Term for searching
        $term = '%' . $term . '%';

        // Applying search on all the columns
        $query->where(function ($query) use ($term) {
            $query
                ->where('nama_umkm', 'like', $term)
                ->orWhere('nama_pemilik', 'like', $term)
                ->orWhere('nik', 'like', $term)
                ->orWhere('nomor_kartu_keluarga', 'like', $term)
                ->orWhere('no_handphone', 'like', $term)
                ->orWhere('email', 'like', $term)
                ->orWhere('tempat_lahir', 'like', $term)
                ->orWhere('tanggal_lahir', 'like', $term)
                ->orWhere('umur', 'like', $term)
                ->orWhere('jenis_kelamin', 'like', $term)
                ->orWhere('status_perkawinan', 'like', $term)
                ->orWhere('pendidikan', 'like', $term)
                ->orWhere('alamat_rumah', 'like', $term)
                ->orWhere('alamat_usaha', 'like', $term)
                ->orWhere('jenis_sektor', 'like', $term)
                ->orWhere('jenis_usaha', 'like', $term)
                ->orWhere('bentuk_hukum_perusahaan', 'like', $term)
                ->orWhere('no_ijin_usaha', 'like', $term)
                ->orWhere('kepemilikan_ijin_usaha', 'like', $term)
                ->orWhere('tenaga_kerja_tetap_perempuan', 'like', $term)
                ->orWhere('tenaga_kerja_tetap_laki_laki', 'like', $term)
                ->orWhere('tenaga_kerja_lepas_perempuan', 'like', $term)
                ->orWhere('tenaga_kerja_lepas_laki_laki', 'like', $term)
                ->orWhere('modal_awal_usaha', 'like', $term)
                ->orWhere('volume_produksi', 'like', $term)
                ->orWhere('satuan_volume_produksi', 'like', $term)
                ->orWhere('omzet_penjualan', 'like', $term)
                ->orWhere('quantity_penjualan', 'like', $term)
                ->orWhere('keuntungan_bersih', 'like', $term)
                ->orWhere('asset_tanah_bangunan', 'like', $term)
                ->orWhere('asset_mesin_peralatan', 'like', $term)
                ->orWhere('asset_kendaraan', 'like', $term)
                ->orWhere('daerah_pemasaran', 'like', $term)
                ->orWhere('kemitraan', 'like', $term)
                ->orWhere('pelatihan', 'like', $term)
                ->orWhere('status_umkm', 'like', $term)
                ->orWhere('gen', 'like', $term);
        });

        return $query;
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
