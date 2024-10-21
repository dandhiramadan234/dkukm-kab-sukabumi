<?php

namespace App\Imports;

use App\Models\Umkm;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class UmkmImport implements ToModel, WithStartRow
{
    private $startRow = 2;
    private $errors = []; // Variabel untuk menampung pesan error

    public function model(array $row)
    {
        try {
            // Transaksi DB untuk memastikan semua eksekusi atomik
            DB::transaction(function () use ($row) {
                // Cek apakah nik sudah ada di database
                $existingUmkm = Umkm::where('nik', $row[2])->first();

                // Jika nik sudah ada, tambahkan pesan error ke array dan abaikan baris
                if ($existingUmkm) {
                    $this->errors[] = 'NIK sudah terdaftar: ' . $row[2];
                    return null;
                }

                $kemitraan = $this->parseKemitraan($row[59]);

                // Buat model Umkm dan simpan ke database
                Umkm::create([
                    'nama_umkm' => $row[0] ?? null,
                    'nama_pemilik' => $row[1] ?? null,
                    'nik' => $row[2] ?? null,
                    'nomor_kartu_keluarga' => $row[3] ?? null,
                    'no_handphone' => $row[4] ?? null,
                    'email' => $row[5] ?? null,
                    'tempat_lahir' => $row[6] ?? null,
                    'tanggal_lahir' => Date::excelToDateTimeObject($row[7])->format('Y-m-d') ?? null,
                    'umur' => $row[8] ?? null,
                    'gen' => $row[9] ?? null,
                    'jenis_kelamin' => $row[10] ?? null,
                    'status_perkawinan' => $row[11] ?? null,
                    'pendidikan' => $row[12] ?? null,
                    'alamat_rumah' => $row[13] ?? null,
                    'alamat_usaha' => $row[14] ?? null,
                    'kecamatan' => $row[15] ?? null,
                    'kelurahan_desa' => $row[16] ?? null,
                    'kabupaten_kota' => $row[17] ?? null,
                    'provinsi' => $row[18] ?? null,
                    'jenis_sektor' => $row[19] ?? null,
                    'jenis_usaha' => $row[20] ?? null,
                    'jenis_usaha_lainnya' => $row[21] ?? null,
                    'bentuk_hukum_perusahaan' => $row[22] ?? null,
                    'npwp' => $row[23] ?? null,
                    'nomor_npwp' => $row[24] ?? null,
                    'nib' => $row[25] ?? null,
                    'nomor_nib' => $row[26] ?? null,
                    'pirt' => $row[27] ?? null,
                    'nomor_pirt' => $row[28] ?? null,
                    'halal' => $row[29] ?? null,
                    'nomor_halal' => $row[30] ?? null,
                    'sni' => $row[31] ?? null,
                    'nomor_sni' => $row[32] ?? null,
                    'bpom' => $row[33] ?? null,
                    'nomor_bpom' => $row[34] ?? null,
                    'hki' => $row[35] ?? null,
                    'nomor_hki' => $row[36] ?? null,
                    'tenaga_kerja_tetap_perempuan' => $row[37] ?? null,
                    'tenaga_kerja_tetap_laki_laki' => $row[38] ?? null,
                    'tenaga_kerja_lepas_perempuan' => $row[39] ?? null,
                    'tenaga_kerja_lepas_laki_laki' => $row[40] ?? null,
                    'modal_awal_usaha' => $row[41] ?? null,
                    'volume_produksi' => $row[42] ?? null,
                    'satuan_volume_produksi' => $row[43] ?? null,
                    'omzet_penjualan' => $row[44] ?? null,
                    'quantity_penjualan' => $row[45] ?? null,
                    'kategori_usaha' => $row[46] ?? null,
                    'keuntungan_bersih' => $row[47] ?? null,
                    'asset_tanah_bangunan' => $row[48] ?? null,
                    'asset_mesin_peralatan' => $row[49] ?? null,
                    'asset_kendaraan' => $row[50] ?? null,
                    'lokal' => $row[51] ?? null,
                    'lintas_kabupaten_kota' => $row[52] ?? null,
                    'lintas_provinsi' => $row[53] ?? null,
                    'export' => $row[54] ?? null,
                    'online' => $row[55] ?? null,
                    'pemasaran_online' => $row[56] ?? null,
                    'pembiayaan' => $row[57] ?? null,
                    'sumber_pembiayaan' => $row[58] ?? null,
                    'kemitraan' => $kemitraan ?? null,
                    'pelatihan' => $row[60] ?? null,
                    'jenis_pelatihan' => $row[61] ?? null,
                    'status_umkm' => $row[62] ?? null,
                ]);
            });

        } catch (\Throwable $e) {
            // Tangkap error dan rollback
            session()->flash('error', 'Terjadi kesalahan saat mengimport data: ' . $e->getMessage());
        }
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
