<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}


    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <div class="d-flex justify-content-between">
                            <h4>Filter Export</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="export">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="form-label" for="Jenis Sektor">Jenis Sektor</label>
                                <select wire:model.live.debounce.250ms="jenis_sektor"
                                    class="form-select form-select-md  @error('jenis_sektor') is-invalid @enderror"
                                    aria-label=".form-select-md example">
                                    <option label="Pilih Jenis Sektor"> </option>
                                    <option value="pertanian">Pertanian</option>
                                    <option value="peternakan">Peternakan</option>
                                    <option value="pariwisata">Pariwisata</option>
                                    <option value="perdagangan">Perdagangan</option>
                                    <option value="industri mikro">Industri Mikro</option>
                                    <option value="perikanan">Perikanan</option>
                                    <option value="jasa">Jasa</option>
                                    <option value="agro industri">Agro Industri</option>
                                </select>
                                @error('jenis_sektor')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="Jenis Usaha">Jenis Usaha</label>
                                <select wire:model.live.debounce.250ms="jenis_usaha"
                                    class="form-select form-select-md  @error('jenis_usaha') is-invalid @enderror"
                                    aria-label=".form-select-md example">
                                    <option label="Pilih Jenis Usaha"> </option>
                                    <option value="fashion">Fashion</option>
                                    <option value="kerajinan">Kerajinan</option>
                                    <option value="periklanan">Periklanan</option>
                                    <option value="desain">Desain</option>
                                    <option value="arsitektur">Arsitektur</option>
                                    <option value="pasar seni">Pasar Seni</option>
                                    <option value="Drama">Drama</option>
                                    <option value="pengembangan perangkat lunak">Pengembangan Perangkat Lunak</option>
                                    <option value="kuliner">Kuliner</option>
                                    <option value="seni rupa">Seni Rupa</option>
                                    <option value="perfilman">Perfilman</option>
                                    <option value="budidaya">Budidaya</option>
                                    <option value="fotografi">Fotografi</option>
                                </select>
                                @error('jenis_usaha')
                                    <div class="invalid-tooltip">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <label class="form-label" for="Actions">Actions</label>
                                <div class="form-group">
                                    <button class="btn bg-success font-white f-w-500" type="submit">Export
                                        Excel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    {{ $this->umkm->links(data: ['scrollTo' => false]) }}
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <div class="d-flex justify-content-between">
                            <h4>Data</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="col-md-4 me-2">
                                <select class="form-select" aria-label="10" wire:model.live.debounce.250ms="paginate">
                                    <option label="View"></option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Search"
                                    wire:model.live.debounce.250ms="search">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive theme-scrollbar signal-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nama UMKM</th>
                                    <th scope="col">Jenis Sektor</th>
                                    <th scope="col">Jenis Usaha</th>
                                    <th scope="col">Status Usaha </th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($this->umkm as $umkm)
                                    <tr wire:key="{{ $umkm->id }}">
                                        <td>{{ $umkm->nama_umkm }}</td>
                                        <td>{{ $umkm->jenis_sektor }}</td>
                                        <td>{{ $umkm->jenis_usaha }}</td>
                                        <td>
                                            @if ($umkm->status_umkm == 'active')
                                                <div class="status-box">
                                                    <div class="btn background-light-success font-success f-w-500">
                                                        Active</div>
                                                </div>
                                            @else
                                                <div class="status-box">
                                                    <div class="btn background-light-danger font-danger f-w-500">
                                                        Inactive</div>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-info dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                                <ul class="dropdown-menu dropdown-block">
                                                    <li>
                                                        <button type="button" class="dropdown-item"
                                                            data-bs-toggle="modal" data-bs-target="#modal-details"
                                                            wire:click="$dispatchTo('admin.modal.modal-details', 'show-modal-details', { id: {{ $umkm->id }} })">
                                                            Details
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('form-update-umkm', ['id' => $umkm->id]) }}">Update</a>
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
                    {{ $this->umkm->links(data: ['scrollTo' => false]) }}
                </div>
            </div>
        </div>
    </div>
</div>
