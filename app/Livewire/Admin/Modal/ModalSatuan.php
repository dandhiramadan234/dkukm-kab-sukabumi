<?php

namespace App\Livewire\Admin\Modal;

use App\Models\Satuan;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;

class ModalSatuan extends Component
{
    public function render()
    {
        return view('livewire.admin.modal.modal-satuan');
    }

    public $id;
    public $state;
    public $description;

    #[On('show-modal-satuan')]
    public function openModalSatuan($id, $state)
    {
        $this->id = $id;
        $this->state = $state;

        if ($this->state != 'create') {
            $satuan = Satuan::find($id);
            $this->description = $satuan->description;
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

            $create = Satuan::create([
                'description' => $this->description
            ]);
            
            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('satuan'),
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

            $update = Satuan::where('id', $this->id)->update([
                'description' => $this->description
            ]);

            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('satuan'),
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

            $update = Satuan::where('id', $this->id)->delete();

            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('satuan'),
            ]);
        } catch (Throwable $th) {
            DB::rollBack();
            session()->flash('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }
}
