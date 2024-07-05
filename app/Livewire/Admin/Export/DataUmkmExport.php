<?php

namespace App\Livewire\Admin\Export;

use App\Exports\UmkmExport;
use App\Models\Umkm;
use Carbon\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Kecamatan;

#[Title('Export Data UMKM')]
class DataUmkmExport extends Component
{
    use WithPagination;
    public $paginate = 10;

    public $search = '';

    protected $updatesQueryString = [
        'search' => ['except' => ''],
    ];

    public $jenis_sektor;
    public $jenis_usaha;
    public $kecamatan;

    public function render()
    {
        return view('livewire.admin.export.data-umkm-export');
    }

    public function export()
    {
        $timestamp = Carbon::now()->format('Ymd_His');
        $filename = 'umkm_' . $timestamp . '.xlsx'; 

        return Excel::download(new UmkmExport($this->jenis_usaha, $this->jenis_sektor, $this->kecamatan), $filename);
    }

    #[Computed]
    public function umkm()
    {
        $query = Umkm::query();

        if ($this->search) {
            $query->search($this->search);
        }

        if ($this->jenis_sektor) {
            $query->where('jenis_sektor', $this->jenis_sektor);
        }

        if ($this->jenis_usaha) {
            $query->where('jenis_usaha', $this->jenis_usaha);
        }

        if ($this->kecamatan) {
            $query->where('kecamatan', $this->kecamatan);
        }

        return $query->paginate($this->paginate);
    }

    #[Computed]
    public function kecamatans()
    {
        return Kecamatan::get();
    }
}
