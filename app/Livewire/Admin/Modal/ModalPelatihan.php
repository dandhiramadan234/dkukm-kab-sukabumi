<?php

namespace App\Livewire\Admin\Modal;

use App\Models\Pelatihan;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;

class ModalPelatihan extends Component
{
    public function render()
    {
        return view('livewire.admin.modal.modal-pelatihan');
    }

    public $id;
    public $state;
    public $description;

    #[On('show-modal-pelatihan')]
    public function openModalPelatihan($id, $state)
    {
        $this->id = $id;
        $this->state = $state;

        if ($this->state != 'create') {
            $pelatihan = Pelatihan::find($id);
            $this->description = $pelatihan->description;
        }
    }

    public function save()
    {
        $this->validate(
            [
                'description' => 'required',
            ],
            [
                'description.required' => 'Description harus diisi.',
            ],
        );

        DB::beginTransaction();

        try {

            $create = Pelatihan::create([
                'description' => $this->description
            ]);
            
            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('pelatihan'),
            ]);
        } catch (Throwable $th) {
            DB::rollBack();
            session()->flash('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }

    public function edit()
    {
        $this->validate(
            [
                'description' => 'required',
            ],
            [
                'description.required' => 'Description harus diisi.',
            ],
        );

        DB::beginTransaction();

        try {

            $update = Pelatihan::where('id', $this->id)->update([
                'description' => $this->description
            ]);

            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('pelatihan'),
            ]);
        } catch (Throwable $th) {
            DB::rollBack();
            session()->flash('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }

    public function delete()
    {
        DB::beginTransaction();

        try {

            $update = Pelatihan::where('id', $this->id)->delete();

            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('pelatihan'),
            ]);
        } catch (Throwable $th) {
            DB::rollBack();
            session()->flash('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }
}
