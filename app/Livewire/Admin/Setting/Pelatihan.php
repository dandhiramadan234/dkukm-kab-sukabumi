<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use App\Models\Pelatihan as PelatihanModel;

#[Title('Pelatihan')]
class Pelatihan extends Component
{
    use WithPagination;
    public $paginate = 10;
    public $search = '';

    protected $updatesQueryString = [
        'search' => ['except' => ''],
    ];

    #[Computed]
    public function pelatihan()
    {
        return PelatihanModel::search($this->search)->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.admin.setting.pelatihan');
    }
}
