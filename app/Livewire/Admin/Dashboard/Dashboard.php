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

    public $filterKecamatan = 'all';

    public $totalData;
    public $totalAgroIndustri;
    public $totalPariwisata;

    public $lokal;
    public $lintas_kabupaten_kota;
    public $lintas_provinsi;
    public $export;
    public $online;

    public $fashion;
    public $kerajinan;
    public $periklanan;
    public $desain;
    public $arsitektur;
    public $pasar_seni;
    public $drama;
    public $pengembangan_perangkat_lunak;
    public $kuliner;
    public $seni_rupa;
    public $perfilman;
    public $budidaya;
    public $fotografi;
    public $lainnya;

    public $pertanian;
    public $peternakan;
    public $pariwisata;
    public $perdagangan;
    public $industri_mikro;
    public $perikanan;
    public $jasa;
    public $agro_industri;

    public $pembiayaan;
    public $non_pembiayaan;

    public $generasi_alpha;
    public $generasi_z;
    public $generasi_y_milenial;
    public $generasi_x;
    public $generasi_baby_boomers;

    public $laki_laki;
    public $perempuan;

    public function mount()
    {
        $umkm = Umkm::get();

        $this->totalData = $umkm->count();
        $this->totalAgroIndustri = Umkm::where('jenis_sektor', 'agro industri')->count();
        $this->totalPariwisata = Umkm::where('jenis_sektor', 'pariwisata')->count();

        $this->lokal = Umkm::where('lokal', 'V')->count();
        $this->lintas_kabupaten_kota = Umkm::where('lintas_kabupaten_kota', 'V')->count();
        $this->lintas_provinsi = Umkm::where('lintas_provinsi', 'V')->count();
        $this->export = Umkm::where('export', 'V')->count();
        $this->online = Umkm::where('online', 'V')->count();

        $this->fashion = Umkm::where('jenis_usaha', 'fashion')->count();
        $this->kerajinan = Umkm::where('jenis_usaha', 'kerajinan')->count();
        $this->periklanan = Umkm::where('jenis_usaha', 'periklanan')->count();
        $this->desain = Umkm::where('jenis_usaha', 'desain')->count();
        $this->arsitektur = Umkm::where('jenis_usaha', 'arsitektur')->count();
        $this->pasar_seni = Umkm::where('jenis_usaha', 'pasar seni')->count();
        $this->drama = Umkm::where('jenis_usaha', 'drama')->count();
        $this->pengembangan_perangkat_lunak = Umkm::where('jenis_usaha', 'pengembangan perangkat lunak')->count();
        $this->kuliner = Umkm::where('jenis_usaha', 'kuliner')->count();
        $this->seni_rupa = Umkm::where('jenis_usaha', 'seni rupa')->count();
        $this->perfilman = Umkm::where('jenis_usaha', 'perfilman')->count();
        $this->budidaya = Umkm::where('jenis_usaha', 'budidaya')->count();
        $this->fotografi = Umkm::where('jenis_usaha', 'fotografi')->count();
        $this->lainnya = Umkm::where('jenis_usaha', 'lainnya')->count();

        $this->pertanian = Umkm::where('jenis_sektor', 'pertanian')->count();
        $this->peternakan = Umkm::where('jenis_sektor', 'peternakan')->count();
        $this->pariwisata = Umkm::where('jenis_sektor', 'pariwisata')->count();
        $this->perdagangan = Umkm::where('jenis_sektor', 'perdagangan')->count();
        $this->industri_mikro = Umkm::where('jenis_sektor', 'industri mikro')->count();
        $this->perikanan = Umkm::where('jenis_sektor', 'perikanan')->count();
        $this->jasa = Umkm::where('jenis_sektor', 'jasa')->count();
        $this->agro_industri = Umkm::where('jenis_sektor', 'agro industri')->count();

        $this->pembiayaan = Umkm::where('pembiayaan', 'V')->count();
        $this->non_pembiayaan = Umkm::where('pembiayaan', 'X')->count();

        $this->generasi_alpha = Umkm::where('gen', 'Generasi Alpha')->count();
        $this->generasi_z = Umkm::where('gen', 'Generasi Z')->count();
        $this->generasi_y_milenial = Umkm::where('gen', 'Generasi Y/Milenial')->count();
        $this->generasi_x = Umkm::where('gen', 'Generasi X')->count();
        $this->generasi_baby_boomers = Umkm::where('gen', 'Generasi Baby Boomers')->count();

        $this->laki_laki = Umkm::where('jenis_kelamin', 'laki-laki')->count();
        $this->perempuan = Umkm::where('jenis_kelamin', 'perempuan')->count();
    }

    public function updatedFilterKecamatan()
    {
        if ($this->filterKecamatan == 'all' || $this->filterKecamatan == '' || $this->filterKecamatan == null) {
            $umkm = Umkm::get();

            $this->totalData = $umkm->count();
            $this->totalAgroIndustri = Umkm::where('jenis_sektor', 'agro industri')->count();
            $this->totalPariwisata = Umkm::where('jenis_sektor', 'pariwisata')->count();

            $this->lokal = Umkm::where('lokal', 'V')->count();
            $this->lintas_kabupaten_kota = Umkm::where('lintas_kabupaten_kota', 'V')->count();
            $this->lintas_provinsi = Umkm::where('lintas_provinsi', 'V')->count();
            $this->export = Umkm::where('export', 'V')->count();
            $this->online = Umkm::where('online', 'V')->count();

            $this->fashion = Umkm::where('jenis_usaha', 'fashion')->count();
            $this->kerajinan = Umkm::where('jenis_usaha', 'kerajinan')->count();
            $this->periklanan = Umkm::where('jenis_usaha', 'periklanan')->count();
            $this->desain = Umkm::where('jenis_usaha', 'desain')->count();
            $this->arsitektur = Umkm::where('jenis_usaha', 'arsitektur')->count();
            $this->pasar_seni = Umkm::where('jenis_usaha', 'pasar seni')->count();
            $this->drama = Umkm::where('jenis_usaha', 'drama')->count();
            $this->pengembangan_perangkat_lunak = Umkm::where('jenis_usaha', 'pengembangan perangkat lunak')->count();
            $this->kuliner = Umkm::where('jenis_usaha', 'kuliner')->count();
            $this->seni_rupa = Umkm::where('jenis_usaha', 'seni rupa')->count();
            $this->perfilman = Umkm::where('jenis_usaha', 'perfilman')->count();
            $this->budidaya = Umkm::where('jenis_usaha', 'budidaya')->count();
            $this->fotografi = Umkm::where('jenis_usaha', 'fotografi')->count();
            $this->lainnya = Umkm::where('jenis_usaha', 'lainnya')->count();

            $this->pertanian = Umkm::where('jenis_sektor', 'pertanian')->count();
            $this->peternakan = Umkm::where('jenis_sektor', 'peternakan')->count();
            $this->pariwisata = Umkm::where('jenis_sektor', 'pariwisata')->count();
            $this->perdagangan = Umkm::where('jenis_sektor', 'perdagangan')->count();
            $this->industri_mikro = Umkm::where('jenis_sektor', 'industri mikro')->count();
            $this->perikanan = Umkm::where('jenis_sektor', 'perikanan')->count();
            $this->jasa = Umkm::where('jenis_sektor', 'jasa')->count();
            $this->agro_industri = Umkm::where('jenis_sektor', 'agro industri')->count();

            $this->pembiayaan = Umkm::where('pembiayaan', 'V')->count();
            $this->non_pembiayaan = Umkm::where('pembiayaan', 'X')->count();

            $this->generasi_alpha = Umkm::where('gen', 'Generasi Alpha')->count();
            $this->generasi_z = Umkm::where('gen', 'Generasi Z')->count();
            $this->generasi_y_milenial = Umkm::where('gen', 'Generasi Y/Milenial')->count();
            $this->generasi_x = Umkm::where('gen', 'Generasi X')->count();
            $this->generasi_baby_boomers = Umkm::where('gen', 'Generasi Baby Boomers')->count();

            $this->laki_laki = Umkm::where('jenis_kelamin', 'laki-laki')->count();
            $this->perempuan = Umkm::where('jenis_kelamin', 'perempuan')->count();

            $this->dispatch('updateChartData', [
                'lokal' => $this->lokal,
                'lintas_kabupaten_kota' => $this->lintas_kabupaten_kota,
                'lintas_provinsi' => $this->lintas_provinsi,
                'export' => $this->export,
                'online' => $this->online,

                'fashion' => $this->fashion,
                'kerajinan' => $this->kerajinan,
                'periklanan' => $this->periklanan,
                'desain' => $this->desain,
                'arsitektur' => $this->arsitektur,
                'pasar_seni' => $this->pasar_seni,
                'drama' => $this->drama,
                'pengembangan_perangkat_lunak' => $this->pengembangan_perangkat_lunak,
                'kuliner' => $this->kuliner,
                'seni_rupa' => $this->seni_rupa,
                'perfilman' => $this->perfilman,
                'budidaya' => $this->budidaya,
                'fotografi' => $this->fotografi,
                'lainnya' => $this->lainnya,

                'pertanian' => $this->pertanian,
                'peternakan' => $this->peternakan,
                'pariwisata' => $this->pariwisata,
                'perdagangan' => $this->perdagangan,
                'industri_mikro' => $this->industri_mikro,
                'perikanan' => $this->perikanan,
                'jasa' => $this->jasa,
                'agro_industri' => $this->agro_industri,

                'pembiayaan' => $this->pembiayaan,
                'non_pembiayaan' => $this->non_pembiayaan,

                'generasi_alpha' => $this->generasi_alpha,
                'generasi_z' => $this->generasi_z,
                'generasi_y_milenial' => $this->generasi_y_milenial,
                'generasi_x' => $this->generasi_x,
                'generasi_baby_boomers' => $this->generasi_baby_boomers,

                'laki_laki' => $this->laki_laki,
                'perempuan' => $this->perempuan,
            ]);
        } else {
            $umkm = Umkm::where('kecamatan', $this->filterKecamatan)->get();

            $this->totalData = $umkm->count();
            $this->totalAgroIndustri = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'agro industri')
                ->count();
            $this->totalPariwisata = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'pariwisata')
                ->count();

            $this->lokal = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('lokal', 'V')
                ->count();
            $this->lintas_kabupaten_kota = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('lintas_kabupaten_kota', 'V')
                ->count();
            $this->lintas_provinsi = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('lintas_provinsi', 'V')
                ->count();
            $this->export = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('export', 'V')
                ->count();
            $this->online = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('online', 'V')
                ->count();

            $this->fashion = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'fashion')
                ->count();
            $this->kerajinan = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'kerajinan')
                ->count();
            $this->periklanan = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'periklanan')
                ->count();
            $this->desain = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'desain')
                ->count();
            $this->arsitektur = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'arsitektur')
                ->count();
            $this->pasar_seni = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'pasar seni')
                ->count();
            $this->drama = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'drama')
                ->count();
            $this->pengembangan_perangkat_lunak = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'pengembangan perangkat lunak')
                ->count();
            $this->kuliner = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'kuliner')
                ->count();
            $this->seni_rupa = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'seni_rupa')
                ->count();
            $this->perfilman = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'perfilman')
                ->count();
            $this->budidaya = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'budidaya')
                ->count();
            $this->fotografi = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'fotografi')
                ->count();
            $this->lainnya = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_usaha', 'lainnya')
                ->count();

            $this->pertanian = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'pertanian')
                ->count();
            $this->peternakan = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'peternakan')
                ->count();
            $this->pariwisata = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'pariwisata')
                ->count();
            $this->perdagangan = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'perdagangan')
                ->count();
            $this->industri_mikro = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'industri mikro')
                ->count();
            $this->perikanan = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'perikanan')
                ->count();
            $this->jasa = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'jasa')
                ->count();
            $this->agro_industri = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_sektor', 'agro industri')
                ->count();

            $this->pembiayaan = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('pembiayaan', 'V')
                ->count();
            $this->non_pembiayaan = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('pembiayaan', 'X')
                ->count();

            $this->generasi_alpha = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('gen', 'Generasi Alpha')
                ->count();
            $this->generasi_z = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('gen', 'Generasi Z')
                ->count();
            $this->generasi_y_milenial = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('gen', 'Generasi Y/Milenial')
                ->count();
            $this->generasi_x = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('gen', 'Generasi X')
                ->count();
            $this->generasi_baby_boomers = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('gen', 'Generasi Baby Boomers')
                ->count();

            $this->laki_laki = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_kelamin', 'laki-laki')
                ->count();
            $this->perempuan = Umkm::where('kecamatan', $this->filterKecamatan)
                ->where('jenis_kelamin', 'perempuan')
                ->count();

            $this->dispatch('updateChartData', [
                'lokal' => $this->lokal,
                'lintas_kabupaten_kota' => $this->lintas_kabupaten_kota,
                'lintas_provinsi' => $this->lintas_provinsi,
                'export' => $this->export,
                'online' => $this->online,

                'fashion' => $this->fashion,
                'kerajinan' => $this->kerajinan,
                'periklanan' => $this->periklanan,
                'desain' => $this->desain,
                'arsitektur' => $this->arsitektur,
                'pasar_seni' => $this->pasar_seni,
                'drama' => $this->drama,
                'pengembangan_perangkat_lunak' => $this->pengembangan_perangkat_lunak,
                'kuliner' => $this->kuliner,
                'seni_rupa' => $this->seni_rupa,
                'perfilman' => $this->perfilman,
                'budidaya' => $this->budidaya,
                'fotografi' => $this->fotografi,
                'lainnya' => $this->lainnya,

                'pertanian' => $this->pertanian,
                'peternakan' => $this->peternakan,
                'pariwisata' => $this->pariwisata,
                'perdagangan' => $this->perdagangan,
                'industri_mikro' => $this->industri_mikro,
                'perikanan' => $this->perikanan,
                'jasa' => $this->jasa,
                'agro_industri' => $this->agro_industri,

                'pembiayaan' => $this->pembiayaan,
                'non_pembiayaan' => $this->non_pembiayaan,

                'generasi_alpha' => $this->generasi_alpha,
                'generasi_z' => $this->generasi_z,
                'generasi_y_milenial' => $this->generasi_y_milenial,
                'generasi_x' => $this->generasi_x,
                'generasi_baby_boomers' => $this->generasi_baby_boomers,

                'laki_laki' => $this->laki_laki,
                'perempuan' => $this->perempuan,
            ]);
        }
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
