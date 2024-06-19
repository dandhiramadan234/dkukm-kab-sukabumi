<?php

namespace App\Livewire\Admin\Modal;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;

class ModalUser extends Component
{
    public function render()
    {
        return view('livewire.admin.modal.modal-user');
    }

    public $id;
    public $state;
    public $name;
    public $username;
    public $role;
    public $password;

    #[On('show-modal-user')]
    public function openModalUser($id, $state)
    {
        $this->id = $id;
        $this->state = $state;

        if ($this->state != 'create') {
            $user = User::find($id);
            $this->name = $user->name;
            $this->username = $user->username;
            $this->role = $user->role;
        }
    }

    public function save()
    {
        $this->validate(
            [
                'name' => 'required',
                'username' => 'required|unique:users,username',
                'role' => 'required',
                'password' => 'required',
            ],
            [
                'name.required' => 'Nama harus diisi.',
                'username.required' => 'Username harus diisi.',
                'username.unique' => 'Username sudah digunakan.',
                'role.required' => 'Role harus diisi.',
                'password.required' => 'Password harus diisi.',
            ]
        );
        

        DB::beginTransaction();

        try {

            $create = User::create([
                'name' => $this->name,
                'username' => $this->username,
                'role' => $this->role,
                'password' => bcrypt($this->password)
            ]);
            
            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('user-management'),
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
                'name' => 'required',
                'username' => 'required',
                'role' => 'required',
                'password' => 'required',
            ],
            [
                'name.required' => 'Nama harus diisi.',
                'username.required' => 'Username harus diisi.',
                'role.required' => 'Role harus diisi.',
                'password.required' => 'Password harus diisi.',
            ]
        );

        DB::beginTransaction();

        try {

            $update = User::where('id', $this->id)->update([
                'name' => $this->name,
                'username' => $this->username,
                'role' => $this->role,
                'password' => bcrypt($this->password)
            ]);

            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('user-management'),
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

            $delete = User::where('id', $this->id)->delete();

            DB::commit();

            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil disimpan!',
                'route' => route('user-management'),
            ]);
        } catch (Throwable $th) {
            DB::rollBack();
            session()->flash('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }
}
