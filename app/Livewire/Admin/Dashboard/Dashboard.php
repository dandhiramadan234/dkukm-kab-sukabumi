<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard');
    }
}
