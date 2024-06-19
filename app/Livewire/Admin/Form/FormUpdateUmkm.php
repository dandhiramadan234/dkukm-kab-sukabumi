<?php

namespace App\Livewire\Admin\Form;

use Carbon\Carbon;
use App\Models\Umkm;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;

#[Title('Form Update UMKM')]
class FormUpdateUmkm extends Component
{
    public $id;
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
    public $status_umkm = 'active';

    public function mount($id)
    {
        $this->id = $id;

        $umkm = Umkm::find($id);

        $this->nama_umkm = $umkm->nama_umkm;
        $this->nama_pemilik = $umkm->nama_pemilik;
        $this->nik = $umkm->nik;
        $this->no_handphone = $umkm->no_handphone;
        $this->email = $umkm->email;
        $this->tempat_lahir = $umkm->tempat_lahir;
        $this->tanggal_lahir = $umkm->tanggal_lahir;
        $this->umur = $umkm->umur;
        $this->jenis_kelamin = $umkm->jenis_kelamin;
        $this->status_perkawinan = $umkm->status_perkawinan;
        $this->pendidikan = $umkm->pendidikan;
        $this->alamat_rumah = $umkm->alamat_rumah;
        $this->alamat_usaha = $umkm->alamat_usaha;
        $this->jenis_sektor = $umkm->jenis_sektor;
        $this->jenis_usaha = $umkm->jenis_usaha;
        $this->bentuk_hukum_perusahaan = $umkm->bentuk_hukum_perusahaan;
        $this->no_ijin_usaha = $umkm->no_ijin_usaha;
        $this->kepemilikan_ijin_usaha = json_decode($umkm->kepemilikan_ijin_usaha);
        $this->tenaga_kerja_tetap_perempuan = $umkm->tenaga_kerja_tetap_perempuan;
        $this->tenaga_kerja_tetap_laki_laki = $umkm->tenaga_kerja_tetap_laki_laki;
        $this->tenaga_kerja_lepas_perempuan = $umkm->tenaga_kerja_lepas_perempuan;
        $this->tenaga_kerja_lepas_laki_laki = $umkm->tenaga_kerja_lepas_laki_laki;
        $this->modal_awal_usaha = $umkm->modal_awal_usaha;
        $this->volume_produksi = $umkm->volume_produksi;
        $this->satuan_volume_produksi = $umkm->satuan_volume_produksi;
        $this->omzet_penjualan = $umkm->omzet_penjualan;
        $this->quantity_penjualan = $umkm->quantity_penjualan;
        $this->keuntungan_bersih = $umkm->keuntungan_bersih;
        $this->asset_tanah_bangunan = $umkm->asset_tanah_bangunan;
        $this->asset_mesin_peralatan = $umkm->asset_mesin_peralatan;
        $this->asset_kendaraan = $umkm->asset_kendaraan;
        $this->daerah_pemasaran = json_decode($umkm->daerah_pemasaran);
        $this->kemitraan = json_decode($umkm->kemitraan);
        $this->pelatihan = $umkm->pelatihan;
        $this->status_umkm = $umkm->status_umkm;
    }

    public function store()
    {
        $validatedData = $this->validate(
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
                'kepemilikan_ijin_usaha' => 'required|array|min:1',
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
                'daerah_pemasaran' => 'required|array|min:1',
                'daerah_pemasaran.*.daerah_pemasaran' => 'required',
                'kemitraan' => 'required|array|min:1',
                'kemitraan.*.kemitraan' => 'required',
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
                'kepemilikan_ijin_usaha.required' => 'Data kepemilikan ijin usaha harus diisi.',
                'kepemilikan_ijin_usaha.min' => 'Data kepemilikan ijin usaha harus memiliki setidaknya satu item.',
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
                'daerah_pemasaran.required' => 'Data daerah pemasaran harus diisi.',
                'daerah_pemasaran.min' => 'Data daerah pemasaran harus memiliki setidaknya satu item.',
                'daerah_pemasaran.*.daerah_pemasaran.required' => 'Data daerah pemasaran harus diisi.',
                'kemitraan.required' => 'Data kemitraan harus diisi.',
                'kemitraan.min' => 'Data kemitraan harus memiliki setidaknya satu item.',
                'kemitraan.*.kemitraan.required' => 'Data kemitraan harus diisi.',
                'pelatihan.required' => 'Pelatihan harus diisi.',
            ],
        );

        DB::beginTransaction();

        try {
            $tanggalLahir = Carbon::parse($this->tanggal_lahir);
            $umur = $tanggalLahir->age;
            if ($umur < 40) {
                $gen = 'milenial';
            } else {
                $gen = 'non-milenial';
            }

            $delete = Umkm::find($this->id)->delete();
            $create = Umkm::create([
                'nama_umkm' => $this->nama_umkm,
                'nama_pemilik' => $this->nama_pemilik,
                'nik' => $this->nik,
                'no_handphone' => $this->no_handphone,
                'email' => $this->email,
                'tempat_lahir' => $this->tempat_lahir,
                'tanggal_lahir' => $this->tanggal_lahir,
                'umur' => currency_convert($this->umur),
                'jenis_kelamin' => $this->jenis_kelamin,
                'status_perkawinan' => $this->status_perkawinan,
                'pendidikan' => $this->pendidikan,
                'alamat_rumah' => $this->alamat_rumah,
                'alamat_usaha' => $this->alamat_usaha,
                'jenis_sektor' => $this->jenis_sektor,
                'jenis_usaha' => $this->jenis_usaha,
                'bentuk_hukum_perusahaan' => $this->bentuk_hukum_perusahaan,
                'no_ijin_usaha' => $this->no_ijin_usaha,
                'kepemilikan_ijin_usaha' => json_encode($this->kepemilikan_ijin_usaha),
                'tenaga_kerja_tetap_perempuan' => currency_convert($this->tenaga_kerja_tetap_perempuan),
                'tenaga_kerja_tetap_laki_laki' => currency_convert($this->tenaga_kerja_tetap_laki_laki),
                'tenaga_kerja_lepas_perempuan' => currency_convert($this->tenaga_kerja_lepas_perempuan),
                'tenaga_kerja_lepas_laki_laki' => currency_convert($this->tenaga_kerja_lepas_laki_laki),
                'modal_awal_usaha' => currency_convert($this->modal_awal_usaha),
                'volume_produksi' => currency_convert($this->volume_produksi),
                'satuan_volume_produksi' => $this->satuan_volume_produksi,
                'omzet_penjualan' => currency_convert($this->omzet_penjualan),
                'quantity_penjualan' => currency_convert($this->quantity_penjualan),
                'keuntungan_bersih' => currency_convert($this->keuntungan_bersih),
                'asset_tanah_bangunan' => currency_convert($this->asset_tanah_bangunan),
                'asset_mesin_peralatan' => currency_convert($this->asset_mesin_peralatan),
                'asset_kendaraan' => currency_convert($this->asset_kendaraan),
                'daerah_pemasaran' => json_encode($this->daerah_pemasaran),
                'kemitraan' => json_encode($this->kemitraan),
                'pelatihan' => $this->pelatihan,
                'status_umkm' => $this->status_umkm,
                'gen' => $gen,
            ]);

            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('dashboard-admin'),
            ]);
        } catch (Throwable $th) {
            DB::rollBack();
            session()->flash('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }

    public function addFieldDaerahPemasaran()
    {
        $data = [
            'daerah_pemasaran' => null,
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

    public function render()
    {
        return view('livewire.admin.form.form-update-umkm');
    }
}
