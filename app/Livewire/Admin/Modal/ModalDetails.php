<?php

namespace App\Livewire\Admin\Modal;

use App\Models\Umkm;
use App\Models\Product;
use Livewire\Component;
use App\Models\Document;
use Livewire\Attributes\On;

class ModalDetails extends Component
{
    public function render()
    {
        return view('livewire.admin.modal.modal-details');
    }

    public $umkm;
    public $kepemilikan_ijin_usaha = [];
    public $daerah_pemasaran;
    public $kemitraan;
    public $produk = [];
    public $document_produk = [];

    #[On('show-modal-details')]
    public function openModal($id)
    {
        $this->umkm = Umkm::find($id);
        $this->produk = Product::where('umkm_id', $id)->get();
        $this->document_produk = Document::where('umkm_id', $id)->get();

        $ijin_usaha = [];

        if ($this->umkm->npwp == 'V') {
            $ijin_usaha[] = [
                'jenis' => 'NPWP',
                'nomor' => $this->umkm->nomor_npwp,
            ];
        }

        if ($this->umkm->nib == 'V') {
            $ijin_usaha[] = [
                'jenis' => 'NIB',
                'nomor' => $this->umkm->nomor_nib,
            ];
        }

        if ($this->umkm->pirt == 'V') {
            $ijin_usaha[] = [
                'jenis' => 'PIRT',
                'nomor' => $this->umkm->nomor_pirt,
            ];
        }

        if ($this->umkm->halal == 'V') {
            $ijin_usaha[] = [
                'jenis' => 'Halal',
                'nomor' => $this->umkm->nomor_halal,
            ];
        }

        if ($this->umkm->sni == 'V') {
            $ijin_usaha[] = [
                'jenis' => 'SNI',
                'nomor' => $this->umkm->nomor_sni,
            ];
        }

        if ($this->umkm->bpom == 'V') {
            $ijin_usaha[] = [
                'jenis' => 'BPOM',
                'nomor' => $this->umkm->nomor_bpom,
            ];
        }

        if ($this->umkm->hki == 'V') {
            $ijin_usaha[] = [
                'jenis' => 'HKI',
                'nomor' => $this->umkm->nomor_hki,
            ];
        }

        $this->kepemilikan_ijin_usaha = $ijin_usaha;
        $this->daerah_pemasaran = json_decode($this->umkm->daerah_pemasaran);
        $this->kemitraan = json_decode($this->umkm->kemitraan);
    }
}
