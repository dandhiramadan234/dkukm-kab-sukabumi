<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="modal fade" id="modal-details" tabindex="-1" role="dialog" aria-labelledby="grid-modal" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details UMKM </h4>
                    <button class="btn-close" type="button" wire:click="$dispatch('close-modal-details')"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body custom-scrollbar">
                    @if (isset($umkm))
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Nama UMKM</span>
                                            <span>{{ $umkm->nama_umkm ?? '-' ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Nama Pemilih</span>
                                            <span>{{ $umkm->nama_pemilik ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>NIK</span>
                                            <span>{{ $umkm->nik ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Nomor Kartu Keluarga</span>
                                            <span>{{ $umkm->nomor_kartu_keluarga ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>No. Handphone/Telephone</span>
                                            <span>{{ $umkm->no_handphone ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Email</span>
                                            <span>{{ $umkm->email ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Tempat Lahir</span>
                                            <span>{{ $umkm->tempat_lahir ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Umur</span>
                                            <span>{{ $umkm->umur ?? '-' }} ({{ $umkm->gen ?? '-' }})</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jenis Kelamin</span>
                                            <span>{{ $umkm->jenis_kelamin ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Status Perkawinan</span>
                                            <span>{{ $umkm->status_perkawinan ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Pendidikan</span>
                                            <span>{{ $umkm->pendidikan ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Alamat Rumah</span>
                                            <span>{{ $umkm->alamat_rumah ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Alamat Usaha</span>
                                            <span>{{ $umkm->alamat_usaha ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Kecamatan (Usaha)</span>
                                            <span>{{ $umkm->kecamatan ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Kelurahan/Desa (Usaha)</span>
                                            <span>{{ $umkm->kelurahan_desa ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Kabupaten/Kota (Usaha)</span>
                                            <span>{{ $umkm->kabupaten_kota ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Provinsi</span>
                                            <span>{{ $umkm->provinsi ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jenis Sektor</span>
                                            <span>{{ $umkm->jenis_sektor ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jenis Usaha</span>
                                            <span>{{ $umkm->jenis_usaha ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jenis Usaha Lainnya</span>
                                            <span>{{ $umkm->jenis_usaha_lainnya ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Status Usaha</span>
                                            <span>{{ $umkm->status_umkm ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Pelatihan</span>
                                            <span>{{ $umkm->pelatihan ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jenis Pelatihan</span>
                                            <span>{{ $umkm->jenis_pelatihan ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Bentuk Hukum Perusahaan</span>
                                            <span>{{ $umkm->bentuk_hukum_perusahaan ?? '-' }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        @if (isset($kepemilikan_ijin_usaha))
                                            Ijin Usaha yang dimiliki
                                            <div class="table-responsive theme-scrollbar signal-table">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Ijin Usaha</th>
                                                            <th scope="col">Nomor</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($kepemilikan_ijin_usaha as $ijin_usaha)
                                                            <tr>
                                                                <td>{{ $loop->iteration ?? '-' }}</td>
                                                                <td>{{ $ijin_usaha['jenis'] ?? '-' }}</td>
                                                                <td>{{ $ijin_usaha['nomor'] ?? '-' }}</td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td>
                                                                    No Data
                                                                </td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <span>
                                                Ijin Usaha yang dimiliki -</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jumlah Tenaga Kerja Tetap (Perempuan)</span>
                                            <span>{{ currency_format($umkm->tenaga_kerja_tetap_perempuan) ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jumlah Tenaga Kerja Tetap (Laki-Laki)</span>
                                            <span>{{ currency_format($umkm->tenaga_kerja_tetap_laki_laki) ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jumlah Tenaga Kerja Lepas (Perempuan)</span>
                                            <span>{{ currency_format($umkm->tenaga_kerja_lepas_perempuan) ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jumlah Tenaga Kerja Lepas (Laki-Laki)</span>
                                            <span>{{ currency_format($umkm->tenaga_kerja_lepas_laki_laki) ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Modal Awal Usaha</span>
                                            <span>Rp. {{ currency_format($umkm->modal_awal_usaha) ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Volume Produksi</span>
                                            <span>{{ currency_format($umkm->volume_produksi) ?? '-' }}
                                                ({{ $umkm->satuan_volume_produksi ?? '-' }})</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Hasil Penjualan (Omzet)</span>
                                            <span>Rp. {{ currency_format($umkm->omzet_penjualan) ?? '-' }} /Bulan</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Hasil Penjualan (Quantity)</span>
                                            <span>{{ currency_format($umkm->quantity_penjualan) ?? '-' }} pcs/Bulan</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Kategori Usaha</span>
                                            <span>{{ $umkm->kategori_usaha ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                Total Asset <br>
                                                1. Tanah & Bangunan : Rp.
                                                {{ currency_format($umkm->asset_tanah_bangunan) ?? '-' }} <br>
                                                2. Mesin & Peralatan : Rp.
                                                {{ currency_format($umkm->asset_mesin_peralatan) ?? '-' }} <br>
                                                3. Kendaraan : Rp. {{ currency_format($umkm->asset_kendaraan) ?? '-' }} <br>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        @if (isset($jangakauan_pemasaran))
                                            Jangkauan Pemasaran
                                            <div class="table-responsive theme-scrollbar signal-table">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Jangkauan</th>
                                                            <th scope="col">Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($jangakauan_pemasaran as $pemasaran)
                                                            <tr>
                                                                <td>{{ $loop->iteration ?? '-' }}</td>
                                                                <td>{{ $pemasaran['jenis'] ?? '-' }}</td>
                                                                <td>{{ $pemasaran['keterangan'] ?? '-' }}</td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td>No Data</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <span>
                                                Jangkauan Pemasaran -</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Pembiayaan</span>
                                            <span>{{ $umkm->pembiayaan ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Sumber Pembiayaan</span>
                                            <span>{{ $umkm->sumber_pembiayaan ?? '-' }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            @if (isset($kemitraan))
                                                <span>
                                                    Kemitraan <br>
                                                    @foreach ($kemitraan as $item)
                                                        {{ $loop->iteration ?? '-' }} .
                                                        {{ $item->kemitraan ?? '-' }} <br>
                                                    @endforeach
                                                </span>
                                            @else
                                                <span>
                                                    Ijin Usaha yang dimiliki -</span>
                                            @endif
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            @if (isset($produk))
                                                <span>
                                                    Produk <br>
                                                    @foreach ($produk as $item)
                                                        {{ $loop->iteration ?? '-' }} .
                                                        {{ $item->nama_produk ?? '-' }} <br>
                                                    @endforeach
                                                </span>
                                            @else
                                                <span>
                                                    Ijin Usaha yang dimiliki -</span>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @if (count($document_produk) > 0)
                                <div class="col-md-12 mt-3">
                                    <span>Foto Produk</span>
                                    <div class="card-body row mt-2">
                                        @foreach ($document_produk as $document)
                                            @if ($document->file_type == 'produk')
                                                <div class="col-xl-3 col-md-4 col-6">
                                                    @if (Storage::disk('local')->exists($document->file_path . '/' . $document->file_name))
                                                        <img src="{{ asset(Storage::url($document->file_path . '/' . $document->file_name)) }}"
                                                            alt="{{ $document->file_name }}"
                                                            class="w-100 object-fit-cover mb-3">
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            @if (count($document_produk) > 0)
                                <div class="col-md-12 mt-3">
                                    <span>Foto Umkm</span>
                                    <div class="card-body row mt-2">
                                        @foreach ($document_produk as $document)
                                            @if ($document->file_type == 'umkm')
                                                <div class="col-xl-3 col-md-4 col-6">
                                                    @if (Storage::disk('local')->exists($document->file_path . '/' . $document->file_name))
                                                        <img src="{{ asset(Storage::url($document->file_path . '/' . $document->file_name)) }}"
                                                            alt="{{ $document->file_name }}"
                                                            class="w-100 object-fit-cover mb-3">
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button"
                        wire:click="$dispatch('close-modal-details')">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('close-modal-details', () => {
            $('#modal-details').modal('hide');
        });
    </script>
@endscript
