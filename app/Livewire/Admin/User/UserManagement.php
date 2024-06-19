<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;

#[Title('User Management')]
class UserManagement extends Component
{
    use WithPagination;
    public $paginate = 10;
    public $search = '';

    protected $updatesQueryString = [
        'search' => ['except' => ''],
    ];

    #[Computed]
    public function users()
    {
        return User::search($this->search)->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.admin.user.user-management');
    }
}
