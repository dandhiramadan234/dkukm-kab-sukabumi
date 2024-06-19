<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use App\Models\Satuan as SatuanModel;

#[Title('Satuan')]
class Satuan extends Component
{
    use WithPagination;
    public $paginate = 10;
    public $search = '';

    protected $updatesQueryString = [
        'search' => ['except' => ''],
    ];

    #[Computed]
    public function satuan()
    {
        return SatuanModel::search($this->search)->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.admin.setting.satuan');
    }
}
