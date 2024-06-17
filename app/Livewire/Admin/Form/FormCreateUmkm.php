<?php

namespace App\Livewire\Admin\Form;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Form Create UMKM')]
class FormCreateUmkm extends Component
{
    public function render()
    {
        return view('livewire.admin.form.form-create-umkm');
    }

    public $nama_umkm;
    public $nama_pemilik;
    public $nik;
    public $no_handphone;
    public $email;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $umur;
    public $jenis_kelamin;
    public $status_perkawinan;
    public $pendidikan;
    public $alamat_rumah;
    public $alamat_usaha;
    public $jenis_sektor;
    public $jenis_usaha;
    public $bentuk_hukum_perusahaan;
    public $no_ijin_usaha;
    public $kepemilikan_ijin_usaha = [];
    public $kepemilikan_ijin_usaha_lainnya;
    public $tenaga_kerja_tetap_perempuan;
    public $tenaga_kerja_tetap_laki_laki;
    public $tenaga_kerja_lepas_perempuan;
    public $tenaga_kerja_lepas_laki_laki;
    public $modal_awal_usaha;
    public $volume_produksi;
    public $satuan_volume_produksi;
    public $omzet_penjualan;
    public $quantity_penjualan;
    public $keuntungan_bersih;
    public $asset_tanah_bangunan;
    public $asset_mesin_peralatan;
    public $asset_kendaraan;
    public $daerah_pemasaran = [];
    public $kemitraan = [];
    public $pelatihan;

    public function store()
    {
        $this->validate(
            [
                'nama_umkm' => 'required',
                'nama_pemilik' => 'required',
                'nik' => 'required|numeric',
                'no_handphone' => 'required|numeric',
                'email' => 'required|email',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'umur' => 'required|numeric',
                'jenis_kelamin' => 'required',
                'status_perkawinan' => 'required',
                'pendidikan' => 'required',
                'alamat_rumah' => 'required',
                'alamat_usaha' => 'required',
                'jenis_sektor' => 'required',
                'jenis_usaha' => 'required',
                'bentuk_hukum_perusahaan' => 'required',
                'no_ijin_usaha' => 'required',
                'kepemilikan_ijin_usaha' => 'required',
                'kepemilikan_ijin_usaha_lainnya' => 'required',
                'tenaga_kerja_tetap_perempuan' => 'required',
                'tenaga_kerja_tetap_laki_laki' => 'required',
                'tenaga_kerja_lepas_perempuan' => 'required',
                'tenaga_kerja_lepas_laki_laki' => 'required',
                'modal_awal_usaha' => 'required',
                'volume_produksi' => 'required',
                'satuan_volume_produksi' => 'required',
                'omzet_penjualan' => 'required',
                'quantity_penjualan' => 'required',
                'keuntungan_bersih' => 'required',
                'asset_tanah_bangunan' => 'required',
                'asset_mesin_peralatan' => 'required',
                'asset_kendaraan' => 'required',
                'pelatihan' => 'required',
            ],
            [
                'nama_umkm.required' => 'Nama UMKM harus diisi.',
                'nama_pemilik.required' => 'Nama Pemilik harus diisi.',
                'nik.required' => 'NIK harus diisi.',
                'nik.numeric' => 'NIK harus berupa angka.',
                'no_handphone.required' => 'No Handphone/Telephone harus diisi.',
                'no_handphone.numeric' => 'No Handphone/Telephone harus berupa angka.',
                'email.required' => 'Email harus diisi.',
                'email.email' => 'Email harus dalam format yang benar.',
                'tempat_lahir.required' => 'Tempat Lahir harus diisi.',
                'tanggal_lahir.required' => 'Tanggal Lahir harus diisi.',
                'umur.required' => 'Umur harus diisi.',
                'umur.numeric' => 'Umur harus berupa angka.',
                'jenis_kelamin.required' => 'Jenis Kelamin harus diisi.',
                'status_perkawinan.required' => 'Status Perkawinan harus diisi.',
                'pendidikan.required' => 'Pendidikan harus diisi.',
                'alamat_rumah.required' => 'Alamat Rumah harus diisi.',
                'alamat_usaha.required' => 'Alamat Usaha harus diisi.',
                'jenis_sektor.required' => 'Jenis Sektor harus diisi.',
                'jenis_usaha.required' => 'Jenis Usaha harus diisi.',
                'bentuk_hukum_perusahaan.required' => 'Bentuk Hukum Perusahaan harus diisi.',
                'no_ijin_usaha.required' => 'No Ijin Usaha harus diisi.',
                'kepemilikan_ijin_usaha.required' => 'Kepemilikan Ijin Usaha harus diisi.',
                'kepemilikan_ijin_usaha_lainnya.required' => 'Kepemilikan Ijin Usaha Lainnya harus diisi.',
                'tenaga_kerja_tetap_perempuan.required' => 'Tenaga Kerja Tetap untuk perempuan harus diisi.',
                'tenaga_kerja_tetap_laki_laki.required' => 'Tenaga Kerja Tetap untuk laki-laki harus diisi.',
                'tenaga_kerja_lepas_perempuan.required' => 'Tenaga Kerja Lepas untuk perempuan harus diisi.',
                'tenaga_kerja_lepas_laki_laki.required' => 'Tenaga Kerja Lepas untuk laki-laki harus diisi.',
                'modal_awal_usaha.required' => 'Modal Awal Usaha harus diisi.',
                'volume_produksi.required' => 'Volume Produksi harus diisi.',
                'satuan_volume_produksi.required' => 'Satuan Volume Produksi harus diisi.',
                'omzet_penjualan.required' => 'Omzet Penjualan harus diisi.',
                'quantity_penjualan.required' => 'Quantity Penjualan harus diisi.',
                'keuntungan_bersih.required' => 'Keuntungan Bersih harus diisi.',
                'asset_tanah_bangunan.required' => 'Aset Tanah & Bangunan harus diisi.',
                'asset_mesin_peralatan.required' => 'Aset Mesin & Peralatan harus diisi.',
                'asset_kendaraan.required' => 'Aset Kendaraan harus diisi.',
                'pelatihan.required' => 'Aset Kendaraan harus diisi.',
            ],
        );
    }

    public function addFieldDaerahPemasaran()
    {
        $data = [
            'dearah_pemasaran' => null,
        ];

        $this->daerah_pemasaran[] = $data;
    }

    public function deleteFieldDaerahPemasaran($index)
    {
        unset($this->daerah_pemasaran[$index]);
        $this->daerah_pemasaran = array_values($this->daerah_pemasaran);
    }

    public function addFieldKemitraan()
    {
        $data = [
            'kemitraan' => null,
        ];

        $this->kemitraan[] = $data;
    }

    public function deleteFieldKemitraan($index)
    {
        unset($this->kemitraan[$index]);
        $this->kemitraan = array_values($this->kemitraan);
    }
}
