<?php

namespace App\Livewire\Admin\Form;

use Carbon\Carbon;
use App\Models\Umkm;
use App\Models\Satuan;
use App\Models\Product;
use Livewire\Component;
use App\Models\Document;
use App\Models\Kecamatan;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\DB;

#[Title('Form Create UMKM')]
class FormUpdateUmkm extends Component
{
    use WithFileUploads;

    public $id;
    public $nama_umkm;
    public $nama_pemilik;
    public $nik;
    public $nomor_kartu_keluarga;
    public $no_handphone;
    public $email;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $umur;
    public $gen;
    public $jenis_kelamin;
    public $status_perkawinan;
    public $pendidikan;
    public $alamat_rumah;
    public $alamat_usaha;
    public $kecamatan;
    public $kelurahan_desa;
    public $kabupaten_kota;
    public $provinsi;
    public $jenis_sektor;
    public $usaha;
    public $jenis_usaha_lainnya;
    public $bentuk_hukum_perusahaan;
    public $npwp = false;
    public $nomor_npwp;
    public $nib = false;
    public $nomor_nib;
    public $pirt = false;
    public $nomor_pirt;
    public $halal = false;
    public $nomor_halal;
    public $sni = false;
    public $nomor_sni;
    public $bpom = false;
    public $nomor_bpom;
    public $hki = false;
    public $nomor_hki;
    public $tenaga_kerja_tetap_perempuan;
    public $tenaga_kerja_tetap_laki_laki;
    public $tenaga_kerja_lepas_perempuan;
    public $tenaga_kerja_lepas_laki_laki;
    public $modal_awal_usaha;
    public $volume_produksi;
    public $satuan_volume_produksi;
    public $omzet_penjualan;
    public $quantity_penjualan;
    public $kategori_usaha;
    public $keuntungan_bersih;
    public $asset_tanah_bangunan;
    public $asset_mesin_peralatan;
    public $asset_kendaraan;
    public $daerah_pemasaran = [];
    public $kemitraan = [];
    public $nama_produk = [];
    public $document_produk = [];
    public $pelatihan;
    public $jenis_pelatihan;
    public $status_umkm;

    public $current_document_produk = [];

    public function mount($id)
    {
        $this->id = $id;

        $umkm = Umkm::find($id);

        $this->nama_umkm = $umkm->nama_umkm;
        $this->nama_pemilik = $umkm->nama_pemilik;
        $this->nik = $umkm->nik;
        $this->nomor_kartu_keluarga = $umkm->nomor_kartu_keluarga;
        $this->gen = $umkm->gen;
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
        $this->kecamatan = $umkm->kecamatan;
        $this->kelurahan_desa = $umkm->kelurahan_desa;
        $this->kabupaten_kota = $umkm->kabupaten_kota;
        $this->provinsi = $umkm->provinsi;
        $this->jenis_sektor = $umkm->jenis_sektor;
        $this->usaha = $umkm->jenis_usaha;
        $this->jenis_usaha_lainnya = $umkm->jenis_usaha_lainnya;
        $this->bentuk_hukum_perusahaan = $umkm->bentuk_hukum_perusahaan;
        $this->npwp = $umkm->npwp == 'V' ? true : false;
        $this->nomor_npwp = $umkm->nomor_npwp;
        $this->nib = $umkm->nib == 'V' ? true : false;
        $this->nomor_nib = $umkm->nomor_nib;
        $this->pirt = $umkm->pirt == 'V' ? true : false;
        $this->nomor_pirt = $umkm->nomor_pirt;
        $this->halal = $umkm->halal == 'V' ? true : false;
        $this->nomor_halal = $umkm->nomor_halal;
        $this->sni = $umkm->sni == 'V' ? true : false;
        $this->nomor_sni = $umkm->nomor_sni;
        $this->bpom = $umkm->bpom == 'V' ? true : false;
        $this->nomor_bpom = $umkm->nomor_bpom;
        $this->hki = $umkm->hki == 'V' ? true : false;
        $this->nomor_hki = $umkm->nomor_hki;

        $this->tenaga_kerja_tetap_perempuan = $umkm->tenaga_kerja_tetap_perempuan;
        $this->tenaga_kerja_tetap_laki_laki = $umkm->tenaga_kerja_tetap_laki_laki;
        $this->tenaga_kerja_lepas_perempuan = $umkm->tenaga_kerja_lepas_perempuan;
        $this->tenaga_kerja_lepas_laki_laki = $umkm->tenaga_kerja_lepas_laki_laki;
        $this->modal_awal_usaha = $umkm->modal_awal_usaha;
        $this->volume_produksi = $umkm->volume_produksi;
        $this->satuan_volume_produksi = $umkm->satuan_volume_produksi;
        $this->omzet_penjualan = $umkm->omzet_penjualan;
        $this->quantity_penjualan = $umkm->quantity_penjualan;
        $this->kategori_usaha = $umkm->kategori_usaha;
        $this->keuntungan_bersih = $umkm->keuntungan_bersih;
        $this->asset_tanah_bangunan = $umkm->asset_tanah_bangunan;
        $this->asset_mesin_peralatan = $umkm->asset_mesin_peralatan;
        $this->asset_kendaraan = $umkm->asset_kendaraan;
        $this->daerah_pemasaran = json_decode($umkm->daerah_pemasaran, true) ?? [];
        $this->kemitraan = json_decode($umkm->kemitraan, true) ?? [];
        $this->pelatihan = $umkm->pelatihan;
        $this->jenis_pelatihan = $umkm->jenis_pelatihan;
        $this->status_umkm = $umkm->status_umkm;

        $data_nama_produk = Product::where('umkm_id', $id)->get();

        if ($data_nama_produk) {
            foreach ($data_nama_produk as $produk) {
                $data = [
                    'nama_produk' => $produk->nama_produk,
                ];

                $this->nama_produk[] = $data;
            }
        }

        $data_document_produk = Document::where('umkm_id', $id)->get();

        if ($data_document_produk) {
            foreach ($data_document_produk as $document) {
                $data = [
                    'state' => 'current',
                    'id' => $document->id,
                    'file_name' => $document->file_name,
                    'file_path' => $document->file_path,
                ];

                $this->current_document_produk[] = $data;
            }
        }
    }

    #[Computed]
    public function satuan()
    {
        return Satuan::get();
    }

    #[Computed]
    public function kecamatans()
    {
        return Kecamatan::get();
    }

    public function updatedUsaha()
    {
        if ($this->usaha != 'lainnya') {
            $this->jenis_usaha_lainnya = null;
        }
    }

    public function updatedNpwp()
    {
        if (!$this->npwp) {
            $this->nomor_npwp = null;
        }
    }

    public function updatedNib()
    {
        if (!$this->nib) {
            $this->nomor_nib = null;
        }
    }

    public function updatedPirt()
    {
        if (!$this->pirt) {
            $this->nomor_pirt = null;
        }
    }

    public function updatedHalal()
    {
        if (!$this->halal) {
            $this->nomor_halal = null;
        }
    }

    public function updatedSni()
    {
        if (!$this->sni) {
            $this->nomor_sni = null;
        }
    }

    public function updatedBpom()
    {
        if (!$this->bpom) {
            $this->nomor_bpom = null;
        }
    }

    public function updatedHki()
    {
        if (!$this->hki) {
            $this->nomor_hki = null;
        }
    }

    public function updatedPelatihan()
    {
        if ($this->pelatihan == 'X') {
            $this->jenis_pelatihan = null;
        }
    }

    public function store()
    {
        $this->validate(
            [
                'nama_umkm' => 'required',
                'nama_pemilik' => 'required',
                'nik' => 'required|numeric',
                'no_handphone' => 'required|numeric',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'umur' => 'required|numeric',
                'gen' => 'required',
                'jenis_kelamin' => 'required',
                'status_perkawinan' => 'required',
                'pendidikan' => 'required',
                'alamat_rumah' => 'required',
                'alamat_usaha' => 'required',
                'kecamatan' => 'required',
                'kelurahan_desa' => 'required',
                'kabupaten_kota' => 'required',
                'provinsi' => 'required',
                'jenis_sektor' => 'required',
                'usaha' => 'required',
                'bentuk_hukum_perusahaan' => 'required',
                'tenaga_kerja_tetap_perempuan' => 'required',
                'tenaga_kerja_tetap_laki_laki' => 'required',
                'tenaga_kerja_lepas_perempuan' => 'required',
                'tenaga_kerja_lepas_laki_laki' => 'required',
                'modal_awal_usaha' => 'required',
                'volume_produksi' => 'required',
                'satuan_volume_produksi' => 'required',
                'omzet_penjualan' => 'required',
                'quantity_penjualan' => 'required',
                'kategori_usaha' => 'required',
                'keuntungan_bersih' => 'required',
                'daerah_pemasaran' => 'required|array|min:1',
                'daerah_pemasaran.*.daerah_pemasaran' => 'required',
                'kemitraan' => 'required|array|min:1',
                'kemitraan.*.kemitraan' => 'required',
                'nama_produk' => 'required|array|min:1',
                'nama_produk.*.nama_produk' => 'required',
                'pelatihan' => 'required',
                'status_umkm' => 'required',
            ],
            [
                'nama_umkm.required' => 'Nama UMKM harus diisi.',
                'nama_pemilik.required' => 'Nama Pemilik harus diisi.',
                'nik.required' => 'NIK harus diisi.',
                'nik.numeric' => 'NIK harus berupa angka.',
                'no_handphone.required' => 'No Handphone/Telephone harus diisi.',
                'no_handphone.numeric' => 'No Handphone/Telephone harus berupa angka.',
                'tempat_lahir.required' => 'Tempat Lahir harus diisi.',
                'tanggal_lahir.required' => 'Tanggal Lahir harus diisi.',
                'umur.required' => 'Umur harus diisi.',
                'umur.numeric' => 'Umur harus berupa angka.',
                'gen.required' => 'Generasi harus diisi.',
                'jenis_kelamin.required' => 'Jenis Kelamin harus diisi.',
                'status_perkawinan.required' => 'Status Perkawinan harus diisi.',
                'pendidikan.required' => 'Pendidikan harus diisi.',
                'alamat_rumah.required' => 'Alamat Rumah harus diisi.',
                'alamat_usaha.required' => 'Alamat Usaha harus diisi.',
                'kecamatan.required' => 'Kecamatan harus diisi.',
                'kelurahan_desa.required' => 'Kelurahan/Desa harus diisi.',
                'kabupaten_kota.required' => 'Kabupaten/Kota harus diisi.',
                'provinsi.required' => 'Provinsi harus diisi.',
                'jenis_sektor.required' => 'Jenis Sektor harus diisi.',
                'usaha.required' => 'Jenis Usaha harus diisi.',
                'bentuk_hukum_perusahaan.required' => 'Bentuk Hukum Perusahaan harus diisi.',
                'tenaga_kerja_tetap_perempuan.required' => 'Tenaga Kerja Tetap untuk perempuan harus diisi.',
                'tenaga_kerja_tetap_laki_laki.required' => 'Tenaga Kerja Tetap untuk laki-laki harus diisi.',
                'tenaga_kerja_lepas_perempuan.required' => 'Tenaga Kerja Lepas untuk perempuan harus diisi.',
                'tenaga_kerja_lepas_laki_laki.required' => 'Tenaga Kerja Lepas untuk laki-laki harus diisi.',
                'modal_awal_usaha.required' => 'Modal Awal Usaha harus diisi.',
                'volume_produksi.required' => 'Volume Produksi harus diisi.',
                'satuan_volume_produksi.required' => 'Satuan Volume Produksi harus diisi.',
                'omzet_penjualan.required' => 'Omzet Penjualan harus diisi.',
                'quantity_penjualan.required' => 'Quantity Penjualan harus diisi.',
                'kategori_usaha.required' => 'Kategori Usaha harus diisi.',
                'keuntungan_bersih.required' => 'Keuntungan Bersih harus diisi.',
                'daerah_pemasaran.required' => 'Data daerah pemasaran harus diisi.',
                'daerah_pemasaran.min' => 'Data daerah pemasaran harus memiliki setidaknya satu item.',
                'daerah_pemasaran.*.daerah_pemasaran.required' => 'Data daerah pemasaran harus diisi.',
                'kemitraan.required' => 'Data kemitraan harus diisi.',
                'kemitraan.min' => 'Data kemitraan harus memiliki setidaknya satu item.',
                'kemitraan.*.kemitraan.required' => 'Data kemitraan harus diisi.',
                'nama_produk.required' => 'Data Nama Produk harus diisi.',
                'nama_produk.min' => 'Data Nama Produk harus memiliki setidaknya satu item.',
                'nama_produk.*.nama_produk.required' => 'Data Nama Produk harus diisi.',
                'pelatihan.required' => 'Pelatihan harus diisi.',
                'status_umkm.required' => 'Status UMKM harus diisi.',
            ],
        );

        if ($this->usaha == 'lainnya') {
            $this->validate(
                [
                    'jenis_usaha_lainnya' => 'required',
                ],
                [
                    'jenis_usaha_lainnya.required' => 'Jenis Usaha harus diisi.',
                ],
            );
        }

        if ($this->npwp) {
            $this->validate(
                [
                    'nomor_npwp' => 'required',
                ],
                [
                    'nomor_npwp.required' => 'Nomor NPWP harus diisi.',
                ],
            );
        }

        if ($this->nib) {
            $this->validate(
                [
                    'nomor_nib' => 'required',
                ],
                [
                    'nomor_nib.required' => 'Nomor NIB harus diisi.',
                ],
            );
        }

        if ($this->pirt) {
            $this->validate(
                [
                    'nomor_pirt' => 'required',
                ],
                [
                    'nomor_pirt.required' => 'Nomor PIRT harus diisi.',
                ],
            );
        }

        if ($this->halal) {
            $this->validate(
                [
                    'nomor_halal' => 'required',
                ],
                [
                    'nomor_halal.required' => 'Nomor Halal harus diisi.',
                ],
            );
        }

        if ($this->sni) {
            $this->validate(
                [
                    'nomor_sni' => 'required',
                ],
                [
                    'nomor_sni.required' => 'Nomor SNI harus diisi.',
                ],
            );
        }

        if ($this->bpom) {
            $this->validate(
                [
                    'nomor_bpom' => 'required',
                ],
                [
                    'nomor_bpom.required' => 'Nomor BPOM harus diisi.',
                ],
            );
        }

        if ($this->hki) {
            $this->validate(
                [
                    'nomor_hki' => 'required',
                ],
                [
                    'nomor_hki.required' => 'Nomor HKI harus diisi.',
                ],
            );
        }

        if ($this->pelatihan == 'V') {
            $this->validate(
                [
                    'jenis_pelatihan' => 'required',
                ],
                [
                    'jenis_pelatihan.required' => 'Jenis Pelatihan harus diisi.',
                ],
            );
        }

        DB::beginTransaction();

        try {
            $update = Umkm::where('id', $this->id)->update([
                'nama_umkm' => $this->nama_umkm,
                'nama_pemilik' => $this->nama_pemilik,
                'nik' => $this->nik,
                'nomor_kartu_keluarga' => $this->nomor_kartu_keluarga,
                'no_handphone' => $this->no_handphone,
                'email' => $this->email,
                'tempat_lahir' => $this->tempat_lahir,
                'tanggal_lahir' => $this->tanggal_lahir,
                'umur' => currency_convert($this->umur),
                'gen' => $this->gen,
                'jenis_kelamin' => $this->jenis_kelamin,
                'status_perkawinan' => $this->status_perkawinan,
                'pendidikan' => $this->pendidikan,
                'alamat_rumah' => $this->alamat_rumah,
                'kecamatan' => $this->kecamatan,
                'kelurahan_desa' => $this->kelurahan_desa,
                'kabupaten_kota' => $this->kabupaten_kota,
                'provinsi' => $this->provinsi,
                'alamat_usaha' => $this->alamat_usaha,
                'jenis_sektor' => $this->jenis_sektor,
                'jenis_usaha' => $this->usaha,
                'jenis_usaha_lainnya' => $this->jenis_usaha_lainnya,
                'bentuk_hukum_perusahaan' => $this->bentuk_hukum_perusahaan,
                'npwp' => $this->npwp ? 'V' : 'X',
                'nomor_npwp' => $this->nomor_npwp,
                'nib' => $this->nib ? 'V' : 'X',
                'nomor_nib' => $this->nomor_nib,
                'pirt' => $this->pirt ? 'V' : 'X',
                'nomor_pirt' => $this->nomor_pirt,
                'halal' => $this->halal ? 'V' : 'X',
                'nomor_halal' => $this->nomor_halal,
                'sni' => $this->sni ? 'V' : 'X',
                'nomor_sni' => $this->nomor_sni,
                'bpom' => $this->bpom ? 'V' : 'X',
                'nomor_bpom' => $this->nomor_bpom,
                'hki' => $this->hki ? 'V' : 'X',
                'nomor_hki' => $this->nomor_hki,
                'tenaga_kerja_tetap_perempuan' => currency_convert($this->tenaga_kerja_tetap_perempuan),
                'tenaga_kerja_tetap_laki_laki' => currency_convert($this->tenaga_kerja_tetap_laki_laki),
                'tenaga_kerja_lepas_perempuan' => currency_convert($this->tenaga_kerja_lepas_perempuan),
                'tenaga_kerja_lepas_laki_laki' => currency_convert($this->tenaga_kerja_lepas_laki_laki),
                'modal_awal_usaha' => currency_convert($this->modal_awal_usaha),
                'volume_produksi' => currency_convert($this->volume_produksi),
                'satuan_volume_produksi' => $this->satuan_volume_produksi,
                'omzet_penjualan' => currency_convert($this->omzet_penjualan),
                'quantity_penjualan' => currency_convert($this->quantity_penjualan),
                'kategori_usaha' => $this->kategori_usaha,
                'keuntungan_bersih' => currency_convert($this->keuntungan_bersih),
                'asset_tanah_bangunan' => currency_convert($this->asset_tanah_bangunan),
                'asset_mesin_peralatan' => currency_convert($this->asset_mesin_peralatan),
                'asset_kendaraan' => currency_convert($this->asset_kendaraan),
                'daerah_pemasaran' => json_encode($this->daerah_pemasaran),
                'kemitraan' => json_encode($this->kemitraan),
                'pelatihan' => $this->pelatihan,
                'jenis_pelatihan' => $this->jenis_pelatihan,
                'status_umkm' => $this->status_umkm,
            ]);

            if (count($this->nama_produk) > 0) {
                $delete_product = Product::where('umkm_id', $this->id)->delete();

                foreach ($this->nama_produk as $produk) {
                    Product::create([
                        'umkm_id' => $this->id,
                        'nama_produk' => $produk['nama_produk'],
                    ]);
                }
            }

            if (count($this->current_document_produk) > 0) {
                foreach ($this->current_document_produk as $file) {
                    if ($file['state'] == 'deleted') {
                        $delete_current_document = Document::where('id', $file['id'])->delete();
                    }
                }
            }

            if (count($this->document_produk) > 0) {
                $folder = 'public/' . $this->nama_umkm;

                foreach ($this->document_produk as $file) {
                    $lastDotPosition = strrpos($file->getClientOriginalName(), '.');
                    $extension = substr($file->getClientOriginalName(), $lastDotPosition + 1);

                    $uniqueId = uniqid();
                    $fileName = 'file-produk-' . $uniqueId . '.' . $extension;

                    //file upload local
                    $file->storeAs($folder, $fileName);
                    //end file upload local

                    Document::create([
                        'umkm_id' => $this->id,
                        'file_name' => $fileName,
                        'file_path' => $folder,
                    ]);
                }
            }

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

    public function addFieldNamaProduk()
    {
        $data = [
            'nama_produk' => null,
        ];

        $this->nama_produk[] = $data;
    }

    public function deleteFieldNamaProduk($index)
    {
        unset($this->nama_produk[$index]);
        $this->nama_produk = array_values($this->nama_produk);
    }

    public function deleteCurrentDocumentProduct($index)
    {
        $this->current_document_produk[$index]['state'] = 'deleted';
    }

    public function render()
    {
        return view('livewire.admin.form.form-update-umkm');
    }
}
