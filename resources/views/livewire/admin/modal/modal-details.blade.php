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
                                            <span>{{ $umkm->nama_umkm }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Nama Pemilih</span>
                                            <span>{{ $umkm->nama_pemilik }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>NIK</span>
                                            <span>{{ $umkm->nik }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>No. Handphone/Telephone</span>
                                            <span>{{ $umkm->no_handphone }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Email</span>
                                            <span>{{ $umkm->email }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Tempat Lahir</span>
                                            <span>{{ $umkm->tempat_lahir }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Umur</span>
                                            <span>{{ $umkm->umur }} ({{ $umkm->gen }})</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jenis Kelamin</span>
                                            <span>{{ $umkm->jenis_kelamin }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Status Perkawinan</span>
                                            <span>{{ $umkm->status_perkawinan }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Pendidikan</span>
                                            <span>{{ $umkm->pendidikan }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Alamat Rumah</span>
                                            <span>{{ $umkm->alamat_rumah }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Alamat Usaha</span>
                                            <span>{{ $umkm->alamat_usaha }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jenis Sektor</span>
                                            <span>{{ $umkm->jenis_sektor }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jenis Usaha</span>
                                            <span>{{ $umkm->jenis_usaha }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Status Usaha</span>
                                            <span>{{ $umkm->status_umkm }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Pelatihan</span>
                                            <span>{{ $umkm->pelatihan }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Bentuk Hukum Perusahaan</span>
                                            <span>{{ $umkm->bentuk_hukum_perusahaan }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>No Ijin Usaha</span>
                                            <span>{{ $umkm->no_ijin_usaha ?? '-' }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">                                    
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            @if (isset($kepemilikan_ijin_usaha))
                                                <span>
                                                    Ijin Usaha yang dimiliki <br>
                                                    @foreach ($kepemilikan_ijin_usaha as $item)
                                                        {{ $loop->iteration }} .
                                                        {{ $item }} <br>
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
                                            <span>Jumlah Tenaga Kerja Tetap (Perempuan)</span>
                                            <span>{{ currency_format($umkm->tenaga_kerja_tetap_perempuan) }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jumlah Tenaga Kerja Tetap (Laki-Laki)</span>
                                            <span>{{ currency_format($umkm->tenaga_kerja_tetap_laki_laki) }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jumlah Tenaga Kerja Lepas (Perempuan)</span>
                                            <span>{{ currency_format($umkm->tenaga_kerja_lepas_perempuan) }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Jumlah Tenaga Kerja Lepas (Laki-Laki)</span>
                                            <span>{{ currency_format($umkm->tenaga_kerja_lepas_laki_laki) }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Modal Awal Usaha</span>
                                            <span>Rp. {{ currency_format($umkm->modal_awal_usaha) }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Volume Produksi</span>
                                            <span>{{ currency_format($umkm->volume_produksi) }}
                                                ({{ $umkm->satuan_volume_produksi }})</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Hasil Penjualan (Omzet)</span>
                                            <span>Rp. {{ currency_format($umkm->omzet_penjualan) }} /Bulan</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Hasil Penjualan (Quantity)</span>
                                            <span>{{ currency_format($umkm->quantity_penjualan) }} pcs/Bulan</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                Total Asset <br>
                                                1. Tanah & Bangunan : Rp.
                                                {{ currency_format($umkm->asset_tanah_bangunan) }} <br>
                                                2. Mesin & Peralatan : Rp.
                                                {{ currency_format($umkm->asset_mesin_peralatan) }} <br>
                                                3. Kendaraan : Rp. {{ currency_format($umkm->asset_kendaraan) }} <br>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            @if (isset($daerah_pemasaran))
                                                <span>
                                                    Daerah Pemasaran <br>
                                                    @foreach ($daerah_pemasaran as $item)
                                                        {{ $loop->iteration }} .
                                                        {{ $item->daerah_pemasaran }} <br>
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
                                            @if (isset($kemitraan))
                                                <span>
                                                    Kemitraan <br>
                                                    @foreach ($kemitraan as $item)
                                                        {{ $loop->iteration }} .
                                                        {{ $item->kemitraan }} <br>
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
