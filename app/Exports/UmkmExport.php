<?php

namespace App\Exports;

use App\Models\Umkm;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
// use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class UmkmExport implements FromQuery, WithHeadings, WithMapping
// class UmkmExport implements FromQuery, WithHeadings, WithMapping, WithDrawings, ShouldAutoSize
{
    protected $jenisUsaha;
    protected $jenisSektor;
    protected $kecamatan;

    public function __construct($jenisUsaha = null, $jenisSektor = null, $kecamatan = null)
    {
        $this->jenisUsaha = $jenisUsaha;
        $this->jenisSektor = $jenisSektor;
        $this->kecamatan = $kecamatan;
    }

    public function query()
    {
        $query = Umkm::with(['products', 'documents'])->newQuery();

        if ($this->jenisUsaha) {
            $query->where('jenis_usaha', $this->jenisUsaha);
        }

        if ($this->jenisSektor) {
            $query->where('jenis_sektor', $this->jenisSektor);
        }

        if ($this->kecamatan) {
            $query->where('kecamatan', $this->kecamatan);
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'Nama UMKM',
            'Nama Pemilik',
            'NIK',
            'Nomor Kartu Keluarga',
            'No Handphone',
            'Email',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Umur',
            'Gen',
            'Jenis Kelamin',
            'Status Perkawinan',
            'Pendidikan',
            'Alamat Rumah',
            'Alamat Usaha',
            'Kecamatan (Usaha)',
            'Kelurahan/Desa (Usaha)',
            'Kabupaten/Kota (Usaha)',
            'Provinsi (Usaha)',
            'Jenis Sektor',
            'Jenis Usaha',
            'Jenis Usaha Lainnya',
            'Bentuk Hukum Perusahaan',
            'NPWP',
            'Nomor NPWP',
            'NIB',
            'Nomor NIB',
            'PIRT',
            'Nomor PIRT',
            'Halal',
            'Nomor Halal',
            'SNI',
            'Nomor SNI',
            'BPOM',
            'Nomor BPOM',
            'HKI',
            'Nomor HKI',
            'Tenaga Kerja Tetap Perempuan',
            'Tenaga Kerja Tetap Laki-Laki',
            'Tenaga Kerja Lepas Perempuan',
            'Tenaga Kerja Lepas Laki-Laki',
            'Modal Awal Usaha',
            'Volume Produksi',
            'Satuan Volume Produksi',
            'Omzet Penjualan',
            'Quantity Penjualan',
            'Kategori Usaha',
            'Keuntungan Bersih',
            'Asset Tanah Bangunan',
            'Asset Mesin Peralatan',
            'Asset Kendaraan',
            'Jangkauan Pemasaran (Lokal)',
            'Jangkauan Pemasaran (Lintas Kabupaten/Kota)',
            'Jangkauan Pemasaran (Lintas Provinsi)',
            'Jangkauan Pemasaran (Export)',
            'Jangkauan Pemasaran (Online)',
            'Keterangan Pemasaran (Online)',
            'Pembiayaan',
            'Sumber Pembiayaan',
            'Kemitraan',
            'Pelatihan',
            'Jenis Pelatihan',
            'Status UMKM',
            'Produk',
            // 'Document',
        ];
    }

    public function map($umkm): array
    {
        $kemitraanJson = json_decode($umkm->kemitraan, true);
        $kemitraan = [];
        if ($kemitraanJson) {
            foreach ($kemitraanJson as $item) {
                if (isset($item['kemitraan'])) {
                    $kemitraan[] = $item['kemitraan'];
                }
            }
        }
        
        $products = $umkm->products ? $umkm->products->pluck('nama_produk')->toArray() : [];

        return [
            $umkm->nama_umkm,
            $umkm->nama_pemilik,
            $umkm->nik,
            $umkm->nomor_kartu_keluarga,
            $umkm->no_handphone,
            $umkm->email,
            $umkm->tempat_lahir,
            $umkm->tanggal_lahir,
            $umkm->umur,
            $umkm->gen,
            $umkm->jenis_kelamin,
            $umkm->status_perkawinan,
            $umkm->pendidikan,
            $umkm->alamat_rumah,
            $umkm->alamat_usaha,
            $umkm->kecamatan,
            $umkm->kelurahan_desa,
            $umkm->kabupaten_kota,
            $umkm->provinsi,
            $umkm->jenis_sektor,
            $umkm->jenis_usaha,
            $umkm->jenis_usaha_lainnya,
            $umkm->bentuk_hukum_perusahaan,
            $umkm->npwp,
            $umkm->nomor_npwp,
            $umkm->nib,
            $umkm->nomor_nib,
            $umkm->pirt,
            $umkm->nomor_pirt,
            $umkm->halal,
            $umkm->nomor_halal,
            $umkm->sni,
            $umkm->nomor_sni,
            $umkm->bpom,
            $umkm->nomor_bpom,
            $umkm->hki,
            $umkm->nomor_hki,
            $umkm->tenaga_kerja_tetap_perempuan,
            $umkm->tenaga_kerja_tetap_laki_laki,
            $umkm->tenaga_kerja_lepas_perempuan,
            $umkm->tenaga_kerja_lepas_laki_laki,
            $umkm->modal_awal_usaha,
            $umkm->volume_produksi,
            $umkm->satuan_volume_produksi,
            $umkm->omzet_penjualan,
            $umkm->quantity_penjualan,
            $umkm->kategori_usaha,
            $umkm->keuntungan_bersih,
            $umkm->asset_tanah_bangunan,
            $umkm->asset_mesin_peralatan,
            $umkm->asset_kendaraan,    
            $umkm->lokal,
            $umkm->lintas_kabupaten_kota,
            $umkm->lintas_provinsi,
            $umkm->export,
            $umkm->online,
            $umkm->pemasaran_online,
            $umkm->pembiayaan,
            $umkm->sumber_pembiayaan,
            implode(', ', $kemitraan),
            $umkm->pelatihan,
            $umkm->jenis_pelatihan,
            $umkm->status_umkm,
            implode(', ', $products),
        ];
    }

    // public function drawings()
    // {
    //     $drawings = [];
    //     $umkms = $this->query()->get();

    //     foreach ($umkms as $key => $umkm) {
    //         foreach ($umkm->documents as $index => $document) {
    //             // Mendapatkan path file menggunakan Storage Laravel
    //             $filePath = Storage::disk('local')->path($document->file_path . '/' . $document->file_name);
                
    //             // Cek apakah file tersebut ada
    //             if (file_exists($filePath)) {
    //                 $drawing = new Drawing();
    //                 $drawing->setName($document->file_name);
    //                 $drawing->setDescription($document->file_name);
    //                 $drawing->setPath($filePath);
    //                 $drawing->setHeight(50);
    //                 $drawing->setCoordinates('BF' . ($key + 2 + $index)); // Sesuaikan kolom dan baris sesuai kebutuhan
    //                 $drawings[] = $drawing;
    //             }
    //         }
    //     }

    //     return $drawings;
    // }

}
