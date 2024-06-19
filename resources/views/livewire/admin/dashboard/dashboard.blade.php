<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body student">
                    <div class="d-flex gap-2 align-items-end">
                        <div class="flex-grow-1">
                            <h2>{{ currency_format($totalData) }}</h2>
                            <p class="mb-0 text-truncate">Data UMKM</p>
                        </div>
                        <div class="flex-shrink-0"><img src="{{ asset('import/images/dashboard-4/icon/invoice.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body student-2">
                    <div class="d-flex gap-2 align-items-end">
                        <div class="flex-grow-1">
                            <h2>{{ currency_format($totalTenagaKerjaTetap) }}</h2>
                            <p class="mb-0 text-truncate">Tenaga Kerja Tetap</p>
                        </div>
                        <div class="flex-shrink-0"><img src="{{ asset('import/images/dashboard-4/icon/invoice.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body student-3">
                    <div class="d-flex gap-2 align-items-end">
                        <div class="flex-grow-1">
                            <h2>{{ currency_format($totalTenagaKerjaLepas) }}</h2>
                            <p class="mb-0 text-truncate">Tenaga Kerja Lepas</p>
                        </div>
                        <div class="flex-shrink-0"><img src="{{ asset('import/images/dashboard-4/icon/invoice.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Tenaga Kerja</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <canvas id="chartTenagaKerja"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Jenis Usaha</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <canvas id="chartJenisUsaha"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Jenis Sektor</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <canvas id="chartJenisSektor"></canvas>
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
                        <div class="d-flex justify-content-between">
                            <select class="form-select" aria-label="10" wire:model.live.debounce.250ms="paginate">
                                <option label="View"></option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
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
                                <tr>
                                    <td>
                                        <input class="form-control" type="text" placeholder="Search"
                                            wire:model.live.debounce.250ms="search">
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Search Jenis Sektor"
                                            wire:model.live.debounce.250ms="jenisSektorFilter">
                                            <option label="Search Jenis Sektor"></option>
                                            @foreach ($this->jenisSektor as $sektor)
                                                <option value="{{ $sektor->jenis_sektor }}">{{ $sektor->jenis_sektor }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Search Jenis Usaha"
                                            wire:model.live.debounce.250ms="jenisSektorUsaha">
                                            <option label="Search Jenis Usaha"></option>
                                            @foreach ($this->jenisUsaha as $usaha)
                                                <option value="{{ $usaha->jenis_usaha }}">{{ $usaha->jenis_usaha }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Search Status Usaha"
                                            wire:model.live.debounce.250ms="statusUmkm">
                                            <option label="Search Status Usaha"></option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </td>
                                    <td></td>
                                </tr>
                                @forelse ($this->umkm as $umkm)
                                    <tr>
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
                                                    <li><a class="dropdown-item" href="{{ route('form-update-umkm', ['id' => $umkm->id]) }}">Update</a></li>

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


@push('scripts')
    <script src="{{ asset('import/js/chart/chartjs/chart.js') }}"></script>
    <script>
        const ctxTenagaKerja = document.getElementById('chartTenagaKerja').getContext('2d');
        new Chart(ctxTenagaKerja, {
            type: 'pie',
            data: {
                labels: @json($chartDataTenagaKerja['labels']),
                datasets: @json($chartDataTenagaKerja['datasets'])
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    </script>
    <script>
        const ctxJenisUsaha = document.getElementById('chartJenisUsaha').getContext('2d');
        new Chart(ctxJenisUsaha, {
            type: 'pie',
            data: {
                labels: @json($chartDataJenisUsaha['labels']),
                datasets: @json($chartDataJenisUsaha['datasets'])
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    </script>
    <script>
        const ctxJenisSektor = document.getElementById('chartJenisSektor').getContext('2d');
        new Chart(ctxJenisSektor, {
            type: 'pie',
            data: {
                labels: @json($chartDataJenisSektor['labels']),
                datasets: @json($chartDataJenisSektor['datasets'])
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    </script>
@endpush
