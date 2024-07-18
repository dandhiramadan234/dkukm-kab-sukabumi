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
                            <h2>{{ currency_format($totalAgroIndustri) }}</h2>
                            <p class="mb-0 text-truncate">Sektor Agro Industri</p>
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
                            <h2>{{ currency_format($totalPariwisata) }}</h2>
                            <p class="mb-0 text-truncate">Sektor Pariwisata</p>
                        </div>
                        <div class="flex-shrink-0"><img src="{{ asset('import/images/dashboard-4/icon/invoice.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Filter Kecamatan</h4>
                </div>
                <div class="card-body">
                    <select class="form-select" aria-label="Pilih Kecamatan"
                        wire:model.live.debounce.250ms="filterKecamatan">
                        <option label="Pilih Kecamatan"></option>
                        <option value="all">Semua Kecamatan</option>
                        @foreach ($this->kecamatans as $item)
                            <option value="{{ $item->kecamatan }}">{{ $item->kecamatan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Jangkauan Pemasaran</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <div id="chartJangkauanPemasaran"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Jenis Usaha</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <div id="chartJenisUsaha"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Jenis Sektor</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <div id="chartJenisSektor"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Pembiayaan</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <div id="chartPembiayaan"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Gen Pemilik UMKM</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <div id="chartGenerasi"></div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chart Gender Pemilik UMKM</h4>
                </div>
                <div class="card-body" wire:ignore>
                    <div id="chartGender"></div>
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
                                    <th scope="col">Kecamatan </th>
                                    <th scope="col">Status Usaha </th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
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
                                        <select class="form-select" aria-label="Search Jenis Usaha"
                                            wire:model.live.debounce.250ms="kecamatan">
                                            <option label="Search Kecamatan"></option>
                                            @foreach ($this->kecamatans as $item)
                                                <option value="{{ $item->kecamatan }}">{{ $item->kecamatan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @forelse ($this->umkm as $umkm)
                                    <tr>
                                        <td>{{ $umkm->nama_umkm }}</td>
                                        <td>{{ $umkm->jenis_sektor }}</td>
                                        <td>{{ $umkm->jenis_usaha }}</td>
                                        <td>{{ $umkm->kecamatan }}</td>
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
                                                    <li><a class="dropdown-item"
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


@push('scripts')
    <script src="{{ asset('import/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset('import/plugins/charts-c3/c3-chart.js') }}"></script>
    <script>
        var chartJangkauanPemasaran = c3.generate({
            bindto: '#chartJangkauanPemasaran',
            data: {
                columns: [
                    // each columns data
                    ['data1', {{ $lokal }}],
                    ['data2', {{ $lintas_kabupaten_kota }}],
                    ['data3', {{ $lintas_provinsi }}],
                    ['data4', {{ $export }}],
                    ['data5', {{ $online }}],
                ],
                type: 'pie',
                names: {
                    'data1': 'Lokal : {{ $lokal }}',
                    'data2': 'Lintas Kabupaten Kota : {{ $lintas_kabupaten_kota }}',
                    'data3': 'Lintas Provinsi : {{ $lintas_provinsi }}',
                    'data4': 'Export : {{ $export }}',
                    'data5': 'Online : {{ $online }}',
                }
            },
            axis: {},
            legend: {
                show: true,
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
        var chartJenisUsaha = c3.generate({
            bindto: '#chartJenisUsaha',
            data: {
                columns: [
                    ['data1', {{ $fashion }}],
                    ['data2', {{ $kerajinan }}],
                    ['data3', {{ $periklanan }}],
                    ['data4', {{ $desain }}],
                    ['data5', {{ $arsitektur }}],
                    ['data6', {{ $pasar_seni }}],
                    ['data7', {{ $drama }}],
                    ['data8', {{ $pengembangan_perangkat_lunak }}],
                    ['data9', {{ $kuliner }}],
                    ['data10', {{ $seni_rupa }}],
                    ['data11', {{ $perfilman }}],
                    ['data12', {{ $budidaya }}],
                    ['data13', {{ $fotografi }}],
                    ['data14', {{ $lainnya }}],
                ],
                type: 'pie',
                names: {
                    'data1': 'Fashion : {{ $fashion }}',
                    'data2': 'Kerajinan : {{ $kerajinan }}',
                    'data3': 'Periklanan : {{ $periklanan }}',
                    'data4': 'Desain : {{ $desain }}',
                    'data5': 'Arsitektur : {{ $arsitektur }}',
                    'data6': 'Pasar Seni : {{ $pasar_seni }}',
                    'data7': 'Drama : {{ $drama }}',
                    'data8': 'Pengembangan Perangkat Lunak : {{ $pengembangan_perangkat_lunak }}',
                    'data9': 'Kuliner : {{ $kuliner }}',
                    'data10': 'Seni Rupa : {{ $seni_rupa }}',
                    'data11': 'Perfilman : {{ $perfilman }}',
                    'data12': 'Budidaya : {{ $budidaya }}',
                    'data13': 'Fotografi : {{ $fotografi }}',
                    'data14': 'Lainnya : {{ $lainnya }}',
                }
            },
            axis: {},
            legend: {
                show: true,
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
        var chartJenisSektor = c3.generate({
            bindto: '#chartJenisSektor',
            data: {
                columns: [
                    ['data1', {{ $pertanian }}],
                    ['data2', {{ $peternakan }}],
                    ['data3', {{ $pariwisata }}],
                    ['data4', {{ $perdagangan }}],
                    ['data5', {{ $industri_mikro }}],
                    ['data6', {{ $perikanan }}],
                    ['data7', {{ $jasa }}],
                    ['data8', {{ $agro_industri }}],
                ],
                type: 'pie',
                names: {
                    'data1': 'Pertanian : {{ $pertanian }}',
                    'data2': 'Peternakan : {{ $peternakan }}',
                    'data3': 'Pariwisata : {{ $pariwisata }}',
                    'data4': 'Perdagangan : {{ $perdagangan }}',
                    'data5': 'Industri Mikro : {{ $industri_mikro }}',
                    'data6': 'Perikanan : {{ $perikanan }}',
                    'data7': 'Jasa : {{ $jasa }}',
                    'data8': 'Agro Industri : {{ $agro_industri }}',
                }
            },
            axis: {},
            legend: {
                show: true,
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
        var chartPembiayaan = c3.generate({
            bindto: '#chartPembiayaan',
            data: {
                columns: [
                    ['data1', {{ $pembiayaan }}],
                    ['data2', {{ $non_pembiayaan }}],
                ],
                type: 'pie',
                names: {
                    'data1': 'Pembiayaan (Ya) : {{ $pembiayaan }}',
                    'data2': 'Pembiayaan (Tidak) : {{ $non_pembiayaan }}',
                }
            },
            axis: {},
            legend: {
                show: true,
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
        var chartGenerasi = c3.generate({
            bindto: '#chartGenerasi',
            data: {
                columns: [
                    ['data1', {{ $generasi_alpha }}],
                    ['data2', {{ $generasi_z }}],
                    ['data3', {{ $generasi_y_milenial }}],
                    ['data4', {{ $generasi_x }}],
                    ['data5', {{ $generasi_baby_boomers }}],
                ],
                type: 'pie',
                names: {
                    'data1': 'Generasi Alpha : {{ $generasi_alpha }}',
                    'data2': 'Generasi Z : {{ $generasi_z }}',
                    'data3': 'Generasi Y/Milenial : {{ $generasi_y_milenial }}',
                    'data4': 'Generasi X : {{ $generasi_x }}',
                    'data5': 'Generasi Baby Boomers : {{ $generasi_baby_boomers }}',
                }
            },
            axis: {},
            legend: {
                show: true,
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
        var chartGender = c3.generate({
            bindto: '#chartGender',
            data: {
                columns: [
                    ['data1', {{ $laki_laki }}],
                    ['data2', {{ $perempuan }}],
                ],
                type: 'pie',
                names: {
                    'data1': 'Laki-Laki : {{ $laki_laki }}',
                    'data2': 'Perempuan : {{ $perempuan }}',
                }
            },
            axis: {},
            legend: {
                show: true,
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
    </script>
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('updateChartData', (dataArray) => {
                var data = dataArray[0];
                chartJangkauanPemasaran.load({
                    columns: [
                        ['data1', data.lokal],
                        ['data2', data.lintas_kabupaten_kota],
                        ['data3', data.lintas_provinsi],
                        ['data4', data.export],
                        ['data5', data.online],
                    ],
                    names: {
                        'data1': 'Lokal : ' + data.lokal,
                        'data2': 'Lintas Kabupaten Kota : ' + data.lintas_kabupaten_kota,
                        'data3': 'Lintas Provinsi : ' + data.lintas_provinsi,
                        'data4': 'Export : ' + data.export,
                        'data5': 'Online : ' + data.online,
                    }
                });
                chartJenisUsaha.load({
                    columns: [
                        ['data1', data.fashion],
                        ['data2', data.kerajinan],
                        ['data3', data.periklanan],
                        ['data4', data.desain],
                        ['data5', data.arsitektur],
                        ['data6', data.pasar_seni],
                        ['data7', data.drama],
                        ['data8', data.pengembangan_perangkat_lunak],
                        ['data9', data.kuliner],
                        ['data10', data.seni_rupa],
                        ['data11', data.perfilman],
                        ['data12', data.budidaya],
                        ['data13', data.fotografi],
                        ['data14', data.lainnya],
                    ],
                    names: {
                        'data1': 'Fashion : ' + data.fashion,
                        'data2': 'Kerajinan : ' + data.kerajinan,
                        'data3': 'Periklanan : ' + data.periklanan,
                        'data4': 'Desain : ' + data.desain,
                        'data5': 'Arsitektur : ' + data.arsitektur,
                        'data6': 'Pasar Seni : ' + data.pasar_seni,
                        'data7': 'Drama : ' + data.drama,
                        'data8': 'Pengembangan Perangkat Lunak : ' + data
                            .pengembangan_perangkat_lunak,
                        'data9': 'Kuliner : ' + data.kuliner,
                        'data10': 'Seni Rupa : ' + data.seni_rupa,
                        'data11': 'Perfilman : ' + data.perfilman,
                        'data12': 'Budidaya : ' + data.budidaya,
                        'data13': 'Fotografi : ' + data.fotografi,
                        'data14': 'Lainnya : ' + data.lainnya,
                    }
                });
                chartJenisSektor.load({
                    columns: [
                        ['data1', data.pertanian],
                        ['data2', data.peternakan],
                        ['data3', data.pariwisata],
                        ['data4', data.perdagangan],
                        ['data5', data.industri_mikro],
                        ['data6', data.perikanan],
                        ['data7', data.jasa],
                        ['data8', data.agro_industri],
                    ],
                    names: {
                        'data1': 'Pertanian : ' + data.pertanian,
                        'data2': 'Peternakan : ' + data.peternakan,
                        'data3': 'Pariwisata : ' + data.pariwisata,
                        'data4': 'Perdagangan : ' + data.perdagangan,
                        'data5': 'Industri Mikro : ' + data.industri_mikro,
                        'data6': 'Perikanan : ' + data.perikanan,
                        'data7': 'Jasa : ' + data.jasa,
                        'data8': 'Agro Industri : ' + data.agro_industri,
                    }
                });
                chartPembiayaan.load({
                    columns: [
                        ['data1', data.pembiayaan],
                        ['data2', data.non_pembiayaan],
                    ],
                    names: {
                        'data1': 'Pembiayaan (Ya) : ' + data.pembiayaan,
                        'data2': 'Pembiayaan (Tidak) : ' + data.non_pembiayaan,
                    }
                });
                chartGenerasi.load({
                    columns: [
                        ['data1', data.generasi_alpha],
                        ['data2', data.generasi_z],
                        ['data3', data.generasi_y_milenial],
                        ['data4', data.generasi_x],
                        ['data5', data.generasi_baby_boomers],
                    ],
                    names: {
                        'data1': 'Generasi Alpha : ' + data.generasi_alpha,
                        'data2': 'Generasi Z : ' + data.generasi_z,
                        'data3': 'Generasi Y/Milenial : ' + data.generasi_y_milenial,
                        'data4': 'Generasi X : ' + data.generasi_x,
                        'data5': 'Generasi Baby Boomers : ' + data.generasi_baby_boomers,
                    }
                });
                chartGender.load({
                    columns: [
                        ['data1', data.laki_laki],
                        ['data2', data.perempuan],
                    ],
                    names: {
                        'data1': 'Laki-Laki : ' + data.laki_laki,
                        'data2': 'Perempuan : ' + data.perempuan,
                    }
                });
            });
        });
    </script>
@endpush
