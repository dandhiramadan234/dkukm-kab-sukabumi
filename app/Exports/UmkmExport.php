<?php

namespace App\Exports;

use App\Models\Umkm;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UmkmExport implements FromQuery, WithHeadings, WithMapping
{
    protected $jenisUsaha;
    protected $jenisSektor;

    public function __construct($jenisUsaha = null, $jenisSektor = null)
    {
        $this->jenisUsaha = $jenisUsaha;
        $this->jenisSektor = $jenisSektor;
    }

    public function query()
    {
        $query = Umkm::query();

        if ($this->jenisUsaha) {
            $query->where('jenis_usaha', $this->jenisUsaha);
        }

        if ($this->jenisSektor) {
            $query->where('jenis_sektor', $this->jenisSektor);
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama UMKM',
            'Nama Pemilik',
            'NIK',
            'No Handphone',
            'Email',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Umur',
            'Jenis Kelamin',
            'Status Perkawinan',
            'Pendidikan',
            'Alamat Rumah',
            'Alamat Usaha',
            'Jenis Sektor',
            'Jenis Usaha',
            'Bentuk Hukum Perusahaan',
            'No Ijin Usaha',
            'Kepemilikan Ijin Usaha',
            'Tenaga Kerja Tetap Perempuan',
            'Tenaga Kerja Tetap Laki-Laki',
            'Tenaga Kerja Lepas Perempuan',
            'Tenaga Kerja Lepas Laki-Laki',
            'Modal Awal Usaha',
            'Volume Produksi',
            'Satuan Volume Produksi',
            'Omzet Penjualan',
            'Quantity Penjualan',
            'Keuntungan Bersih',
            'Asset Tanah Bangunan',
            'Asset Mesin Peralatan',
            'Asset Kendaraan',
            'Daerah Pemasaran',
            'Kemitraan',
            'Pelatihan',
            'Status UMKM',
            'Gen',
            'Created At',
            'Updated At',
            'Deleted At',
        ];
    }

    public function map($umkm): array
    {
        $ijinUsaha = json_decode($umkm->kepemilikan_ijin_usaha, true);
        $daerahPemasaran = json_decode($umkm->daerah_pemasaran, true);
        $pemasaran = [];
        if ($daerahPemasaran) {
            foreach ($daerahPemasaran as $item) {
                if (isset($item['daerah_pemasaran'])) {
                    $pemasaran[] = $item['daerah_pemasaran'];
                }
            }
        }

        $kemitraanJson = json_decode($umkm->kemitraan, true);
        $kemitraan = [];
        if ($kemitraanJson) {
            foreach ($kemitraanJson as $item) {
                if (isset($item['kemitraan'])) {
                    $kemitraan[] = $item['kemitraan'];
                }
            }
        }

        return [
            $umkm->id,
            $umkm->nama_umkm,
            $umkm->nama_pemilik,
            $umkm->nik,
            $umkm->no_handphone,
            $umkm->email,
            $umkm->tempat_lahir,
            $umkm->tanggal_lahir,
            $umkm->umur,
            $umkm->jenis_kelamin,
            $umkm->status_perkawinan,
            $umkm->pendidikan,
            $umkm->alamat_rumah,
            $umkm->alamat_usaha,
            $umkm->jenis_sektor,
            $umkm->jenis_usaha,
            $umkm->bentuk_hukum_perusahaan,
            $umkm->no_ijin_usaha,
            implode(', ', $ijinUsaha),
            $umkm->tenaga_kerja_tetap_perempuan,
            $umkm->tenaga_kerja_tetap_laki_laki,
            $umkm->tenaga_kerja_lepas_perempuan,
            $umkm->tenaga_kerja_lepas_laki_laki,
            $umkm->modal_awal_usaha,
            $umkm->volume_produksi,
            $umkm->satuan_volume_produksi,
            $umkm->omzet_penjualan,
            $umkm->quantity_penjualan,
            $umkm->keuntungan_bersih,
            $umkm->asset_tanah_bangunan,
            $umkm->asset_mesin_peralatan,
            $umkm->asset_kendaraan,           
            implode(', ', $pemasaran),
            implode(', ', $kemitraan),
            $umkm->pelatihan,
            $umkm->status_umkm,
            $umkm->gen,
            $umkm->created_at,
            $umkm->updated_at,
            $umkm->deleted_at,
        ];
    }
}
