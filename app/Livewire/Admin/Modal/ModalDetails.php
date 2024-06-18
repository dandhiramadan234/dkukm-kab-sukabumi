<?php

namespace App\Livewire\Admin\Modal;

use App\Models\Umkm;
use Livewire\Component;
use Livewire\Attributes\On;

class ModalDetails extends Component
{
    public function render()
    {
        return view('livewire.admin.modal.modal-details');
    }

    public $umkm;
    public $kepemilikan_ijin_usaha;
    public $daerah_pemasaran;
    public $kemitraan;

    #[On('show-modal-details')]
    public function openModal($id)
    {
        $this->umkm = Umkm::find($id);
        $this->kepemilikan_ijin_usaha = json_decode($this->umkm->kepemilikan_ijin_usaha);
        $this->daerah_pemasaran = json_decode($this->umkm->daerah_pemasaran);
        $this->kemitraan = json_decode($this->umkm->kemitraan);
    }
}
