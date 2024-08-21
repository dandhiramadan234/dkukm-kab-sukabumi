<?php

namespace App\Imports;

use App\Models\Umkm;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UmkmImport implements ToModel, WithStartRow
{
    private $startRow = 2;

    public function model(array $row)
    {
        $kemitraan = $this->parseKemitraan($row[59]);

        return new Umkm([
            'nama_umkm' => $row[0],
            'nama_pemilik' => $row[1],
            'nik' => $row[2],
            'nomor_kartu_keluarga' => $row[3],
            'no_handphone' => $row[4],
            'email' => $row[5],
            'tempat_lahir' => $row[6],
            'tanggal_lahir' => $row[7],
            'umur' => $row[8],
            'gen' => $row[9],
            'jenis_kelamin' => $row[10],
            'status_perkawinan' => $row[11],
            'pendidikan' => $row[12],
            'alamat_rumah' => $row[13],
            'alamat_usaha' => $row[14],
            'kecamatan' => $row[15],
            'kelurahan_desa' => $row[16],
            'kabupaten_kota' => $row[17],
            'provinsi' => $row[18],
            'jenis_sektor' => $row[19],
            'jenis_usaha' => $row[20],
            'jenis_usaha_lainnya' => $row[21],
            'bentuk_hukum_perusahaan' => $row[22],
            'npwp' => $row[23],
            'nomor_npwp' => $row[24],
            'nib' => $row[25],
            'nomor_nib' => $row[26],
            'pirt' => $row[27],
            'nomor_pirt' => $row[28],
            'halal' => $row[29],
            'nomor_halal' => $row[30],
            'sni' => $row[31],
            'nomor_sni' => $row[32],
            'bpom' => $row[33],
            'nomor_bpom' => $row[34],
            'hki' => $row[35],
            'nomor_hki' => $row[36],
            'tenaga_kerja_tetap_perempuan' => $row[37],
            'tenaga_kerja_tetap_laki_laki' => $row[38],
            'tenaga_kerja_lepas_perempuan' => $row[39],
            'tenaga_kerja_lepas_laki_laki' => $row[40],
            'modal_awal_usaha' => $row[41],
            'volume_produksi' => $row[42],
            'satuan_volume_produksi' => $row[43],
            'omzet_penjualan' => $row[44],
            'quantity_penjualan' => $row[45],
            'kategori_usaha' => $row[46],
            'keuntungan_bersih' => $row[47],
            'asset_tanah_bangunan' => $row[48],
            'asset_mesin_peralatan' => $row[49],
            'asset_kendaraan' => $row[50],
            'lokal' => $row[51],
            'lintas_kabupaten_kota' => $row[52],
            'lintas_provinsi' => $row[53],
            'export' => $row[54],
            'online' => $row[55],
            'pemasaran_online' => $row[56],
            'pembiayaan' => $row[57],
            'sumber_pembiayaan' => $row[58],
            'kemitraan' => $kemitraan,
            'pelatihan' => $row[60],
            'jenis_pelatihan' => $row[61],
            'status_umkm' => $row[62],
        ]);
    }

    public function parseKemitraan($kemitraanString)
    {
        $kemitraanArray = explode(',', $kemitraanString);
        $kemitraanArray = array_map('trim', $kemitraanArray);
        $kemitraanFormatted = [];
        foreach ($kemitraanArray as $item) {
            $kemitraanFormatted[] = ['kemitraan' => $item];
        }
        return json_encode($kemitraanFormatted);
    }

    public function startRow(): int
    {
        return $this->startRow;
    }
}
