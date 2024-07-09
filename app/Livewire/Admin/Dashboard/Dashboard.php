<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Kecamatan;
use App\Models\Umkm;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Dashboard')]
class Dashboard extends Component
{
    use WithPagination;
    public $paginate = 10;

    public $search = '';
    public $jenisSektorFilter = '';
    public $jenisSektorUsaha = '';
    public $kecamatan = '';

    protected $updatesQueryString = [
        'search' => ['except' => ''],
        'jenisSektorFilter' => ['except' => ''],
        'jenisSektorUsaha' => ['except' => ''],
        'kecamatan' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingJenisSektorFilter()
    {
        $this->resetPage();
    }

    public function updatingJenisSektorUsaha()
    {
        $this->resetPage();
    }

    public function updatingKecamatan()
    {
        $this->resetPage();
    }

    public $totalData;
    public $totalAgroIndustri;
    public $totalPariwisata;

    // public $totalTenagaKerjaTetap;
    // public $totalTenagaKerjaTetapPerempuan;
    // public $totalTenagaKerjaTetapLakiLaki;

    // public $totalTenagaKerjaLepas;
    // public $totalTenagaKerjaLepasPerempuan;
    // public $totalTenagaKerjaLepasLakiLaki;

    public $chartDataKecamatan;
    // public $chartDataTenagaKerja;
    public $chartDataJenisUsaha;
    public $chartDataJenisSektor;
    public $chartDataKategoriUsaha;
    public $chartDataGenerasi;
    public $chartDataGender;

    public function mount()
    {
        $umkm = Umkm::get();

        $this->totalData = $umkm->count();
        $this->totalAgroIndustri = Umkm::where('jenis_sektor', 'agro industri')->count();
        $this->totalPariwisata = Umkm::where('jenis_sektor', 'pariwisata')->count();

        $kecamatan = Umkm::distinct('kecamatan')->pluck('kecamatan');
        $data = [];
        foreach ($kecamatan as $kecamatan_usaha) {
            $jumlah = Umkm::where('kecamatan', $kecamatan_usaha)->count();
            $data[] = $jumlah;
        }

        $this->chartDataKecamatan = [
            'labels' => $kecamatan,
            'datasets' => [
                [
                    'data' => $data,
                ],
            ],
        ];

        // $this->totalTenagaKerjaTetapPerempuan = $umkm->sum('tenaga_kerja_tetap_perempuan');
        // $this->totalTenagaKerjaTetapLakiLaki = $umkm->sum('tenaga_kerja_tetap_laki_laki');
        // $this->totalTenagaKerjaTetap = $this->totalTenagaKerjaTetapPerempuan + $this->totalTenagaKerjaTetapLakiLaki;

        // $this->totalTenagaKerjaLepasPerempuan = $umkm->sum('tenaga_kerja_lepas_perempuan');
        // $this->totalTenagaKerjaLepasLakiLaki = $umkm->sum('tenaga_kerja_lepas_laki_laki');
        // $this->totalTenagaKerjaLepas = $this->totalTenagaKerjaLepasPerempuan + $this->totalTenagaKerjaLepasLakiLaki;

        // $this->chartDataTenagaKerja = [
        //     'labels' => ['Tenaga Kerja Tetap Perempuan', 'Tenaga Kerja Tetap Laki-Laki', 'Tenaga Kerja Lepas Perempuan', 'Tenaga Kerja Lepas Laki-Laki'],
        //     'datasets' => [
        //         [
        //             'data' => [$this->totalTenagaKerjaTetapPerempuan, $this->totalTenagaKerjaTetapLakiLaki, $this->totalTenagaKerjaLepasPerempuan, $this->totalTenagaKerjaLepasLakiLaki],
        //         ],
        //     ],
        // ];

        $jenisUsaha = Umkm::distinct('jenis_usaha')->pluck('jenis_usaha');
        $data = [];
        foreach ($jenisUsaha as $jenis) {
            $jumlah = Umkm::where('jenis_usaha', $jenis)->count();
            $data[] = $jumlah;
        }

        $this->chartDataJenisUsaha = [
            'labels' => $jenisUsaha,
            'datasets' => [
                [
                    'data' => $data,
                ],
            ],
        ];

        $jenisSektor = Umkm::distinct('jenis_sektor')->pluck('jenis_sektor');
        $data = [];
        foreach ($jenisSektor as $jenis) {
            $jumlah = Umkm::where('jenis_sektor', $jenis)->count();
            $data[] = $jumlah;
        }

        $this->chartDataJenisSektor = [
            'labels' => $jenisSektor,
            'datasets' => [
                [
                    'data' => $data,
                ],
            ],
        ];

        $kategoriUsaha = Umkm::distinct('kategori_usaha')->pluck('kategori_usaha');
        $data = [];
        foreach ($kategoriUsaha as $kateogri_usaha) {
            $jumlah = Umkm::where('kategori_usaha', $kateogri_usaha)->count();
            $data[] = $jumlah;
        }

        $this->chartDataKategoriUsaha = [
            'labels' => $kategoriUsaha,
            'datasets' => [
                [
                    'data' => $data,
                ],
            ],
        ];
        
        $generasi = Umkm::distinct('gen')->pluck('gen');
        $data = [];
        foreach ($generasi as $generasi_usaha) {
            $jumlah = Umkm::where('gen', $generasi_usaha)->count();
            $data[] = $jumlah;
        }

        $this->chartDataGenerasi = [
            'labels' => $generasi,
            'datasets' => [
                [
                    'data' => $data,
                ],
            ],
        ];

        $gender = Umkm::distinct('jenis_kelamin')->pluck('jenis_kelamin');
        $data = [];
        foreach ($gender as $gender_usaha) {
            $jumlah = Umkm::where('jenis_kelamin', $gender_usaha)->count();
            $data[] = $jumlah;
        }

        $this->chartDataGender = [
            'labels' => $gender,
            'datasets' => [
                [
                    'data' => $data,
                ],
            ],
        ];
    }

    #[Computed]
    public function umkm()
    {
        $query = Umkm::query();

        if ($this->search) {
            $query->search($this->search);
        }

        if ($this->jenisSektorFilter) {
            $query->where('jenis_sektor', $this->jenisSektorFilter);
        }

        if ($this->jenisSektorUsaha) {
            $query->where('jenis_usaha', $this->jenisSektorUsaha);
        }

        if ($this->kecamatan) {
            $query->where('kecamatan', $this->kecamatan);
        }

        return $query->paginate($this->paginate);
    }

    #[Computed]
    public function jenisSektor()
    {
        return Umkm::select('jenis_sektor')->distinct()->get();
    }

    #[Computed]
    public function jenisUsaha()
    {
        return Umkm::select('jenis_usaha')->distinct()->get();
    }

    #[Computed]
    public function kecamatans()
    {
        return Kecamatan::get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard.dashboard');
    }
}
