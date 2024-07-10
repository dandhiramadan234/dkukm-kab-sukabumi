<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Title('Login')]
#[Layout('components.layouts.auth')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }

    #[Rule('required', message: 'Username harus diisi.')]
    public $username;

    #[Rule('required', message: 'Password harus diisi.')]
    public $password;

    public function login()
    {
        $this->validate();

        // Attempt to log the user in
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // Determine the user's role and redirect to the appropriate dashboard
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('dashboard-admin');
            } else {
                return redirect()->route('form-create-umkm-user');
            }
        }

        session()->flash('error', 'Username/password Salah.');
    }
}
