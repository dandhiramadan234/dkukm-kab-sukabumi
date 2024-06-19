<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <div class="d-flex justify-content-between">
                            <h4>Data</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#modal-satuan"
                                wire:click="$dispatchTo('admin.modal.modal-satuan', 'show-modal-satuan', { id: '' , state: 'create'})">
                                Create
                            </button>
                            <input class="form-control" type="text" placeholder="Search"
                                wire:model.live.debounce.250ms="search">
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive theme-scrollbar signal-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($this->satuan as $satuan)
                                    <tr>
                                        <td>{{ $satuan->description }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-info dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                                <ul class="dropdown-menu dropdown-block">
                                                    <li>
                                                        <button type="button" class="dropdown-item"
                                                            data-bs-toggle="modal" data-bs-target="#modal-satuan"
                                                            wire:click="$dispatchTo('admin.modal.modal-satuan', 'show-modal-satuan', { id: {{ $satuan->id }} , state: 'edit'})">
                                                            Edit
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="dropdown-item"
                                                            data-bs-toggle="modal" data-bs-target="#modal-satuan"
                                                            wire:click="$dispatchTo('admin.modal.modal-satuan', 'show-modal-satuan', { id: {{ $satuan->id }} , state: 'delete'})">
                                                            Delete
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{ $this->satuan->links(data: ['scrollTo' => false]) }}
                </div>
            </div>
        </div>
    </div>

    <livewire:admin.modal.modal-satuan />
</div>
