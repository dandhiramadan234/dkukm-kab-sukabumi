<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form</h4>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @if (session()->has('error'))
                            <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                role="alert"><i data-feather="help-circle"></i>
                                <p>{{ session('error') }}</p>
                                <button class="btn-close" type="button" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="col-md-6">
                            <label class="form-label" for="Nama UMKM">Nama UMKM</label>
                            <x-forms.text wire:model.defer="nama_umkm" :placeholder="'Nama UMKM'"></x-forms.text>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Nama Pemilik">Nama Pemilik</label>
                            <x-forms.text wire:model.defer="nama_pemilik" :placeholder="'Nama Pemilik'"></x-forms.text>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="NIK">NIK</label>
                            <x-forms.text wire:model.defer="nik" :placeholder="'NIK'"></x-forms.text>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Nomor Kartu Keluarga">Nomor Kartu Keluarga</label>
                            <x-forms.text wire:model.defer="nomor_kartu_keluarga" :placeholder="'Nomor Kartu Keluarga'"></x-forms.text>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="No Handphone/Telephone">No Handphone/Telephone</label>
                            <x-forms.text wire:model.defer="no_handphone" :placeholder="'No Handphone/Telephone'"></x-forms.text>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Email">Email</label>
                            <x-forms.email wire:model.defer="email" :placeholder="'Email'"></x-forms.email>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="Tempat Lahir">Tempat Lahir</label>
                            <x-forms.text wire:model.defer="tempat_lahir" :placeholder="'Tempat Lahir'"></x-forms.text>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="Tanggal Lahir">Tanggal Lahir</label>
                            <x-forms.date wire:model.defer="tanggal_lahir" :placeholder="'Tanggal Lahir'"></x-forms.date>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="Umur">Umur</label>
                            <x-forms.number wire:model.defer="umur" :placeholder="'Umur'"></x-forms.number>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Generasi">Generasi</label>
                            <select wire:model.defer="gen"
                                class="form-select form-select-md  @error('gen') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Generasi"> </option>
                                <option value="Generasi Alpha">Generasi Alpha (2011-sekarang)</option>
                                <option value="Generasi Z">Generasi Z (1996-2010)</option>
                                <option value="Generasi Y/Milenial">Generasi Y/Milenial (1981-1995)</option>
                                <option value="Generasi X">Generasi X (1965-1980)</option>
                                <option value="Generasi Baby Boomers">Generasi Baby Boomers (1946-1964)</option>
                            </select>
                            @error('gen')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Jenis Kelamin">Jenis Kelamin</label>
                            <select wire:model.defer="jenis_kelamin"
                                class="form-select form-select-md  @error('jenis_kelamin') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Jenis Kelamin"> </option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Status Perkawinan">Status Perkawinan</label>
                            <select wire:model.defer="status_perkawinan"
                                class="form-select form-select-md  @error('status_perkawinan') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Status Perkawinan"> </option>
                                <option value="belum kawin">Belum Kawin</option>
                                <option value="kawin">Kawin</option>
                                <option value="cerai hidup">Cerai Hidup</option>
                                <option value="cerai mati">Cerai Mati</option>
                            </select>
                            @error('status_perkawinan')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Pendidikan">Pendidikan</label>
                            <select wire:model.defer="pendidikan"
                                class="form-select form-select-md  @error('pendidikan') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Pendidikan"> </option>
                                <option value="SD atau sederajat">SD atau sederajat</option>
                                <option value="SMP atau sederajat">SMP atau sederajat</option>
                                <option value="SMA atau sederajat">SMA atau sederajat</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            @error('pendidikan')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Alamat Rumah">Alamat Rumah</label>
                            <x-forms.text wire:model.defer="alamat_rumah" :placeholder="'Alamat Rumah'"></x-forms.text>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Alamat Usaha">Alamat Usaha</label>
                            <x-forms.text wire:model.defer="alamat_usaha" :placeholder="'Alamat Usaha'"></x-forms.text>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Kecamatan (Tempat Usaha)">Kecamatan (Tempat Usaha)</label>
                            <select wire:model.defer="kecamatan"
                                class="form-select form-select-md  @error('kecamatan') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Kecamatan"> </option>
                                @foreach ($this->kecamatans as $item)
                                    <option value="{{ $item->kecamatan }}">{{ $item->kecamatan }}</option>
                                @endforeach
                            </select>
                            @error('kecamatan')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Kelurahan/Desa (Tempat Usaha)">Kelurahan/Desa (Tempat
                                Usaha)</label>
                            <x-forms.text wire:model.defer="kelurahan_desa" :placeholder="'Kelurahan/Desa (Tempat Usaha)'"></x-forms.text>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Kabupaten/Kota (Tempat Usaha)">Kabupaten/Kota (Tempat
                                Usaha)</label>
                            <x-forms.text wire:model.defer="kabupaten_kota" :placeholder="'Kabupaten/Kota (Tempat Usaha)'"></x-forms.text>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Provinsi (Tempat Usaha)">Provinsi (Tempat Usaha)</label>
                            <x-forms.text wire:model.defer="provinsi" :placeholder="'Provinsi (Tempat Usaha)'"></x-forms.text>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Jenis Sektor">Jenis Sektor</label>
                            <select wire:model.defer="jenis_sektor"
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
                        <div class="col-md-3">
                            <label class="form-label" for="Jenis Usaha">Jenis Usaha</label>
                            <select wire:model.live="usaha"
                                class="form-select form-select-md  @error('usaha') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Jenis Usaha"> </option>
                                <option value="fashion">Fashion</option>
                                <option value="kerajinan">Kerajinan</option>
                                <option value="periklanan">Periklanan</option>
                                <option value="desain">Desain</option>
                                <option value="arsitektur">Arsitektur</option>
                                <option value="pasar seni">Pasar Seni</option>
                                <option value="drama">Drama</option>
                                <option value="pengembangan perangkat lunak">Pengembangan Perangkat Lunak</option>
                                <option value="kuliner">Kuliner</option>
                                <option value="seni rupa">Seni Rupa</option>
                                <option value="perfilman">Perfilman</option>
                                <option value="budidaya">Budidaya</option>
                                <option value="fotografi">Fotografi</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                            @error('usaha')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="Jenis Usaha Lainnya">Jenis Usaha Lainnya</label>
                            <input type="text"
                                class="form-control @error('jenis_usaha_lainnya') is-invalid @enderror"
                                wire:model.defer="jenis_usaha_lainnya" placeholder="Jenis Usaha"
                                @if ($usaha != 'lainnya') disabled @endif />
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Bentuk Hukum Perusahaan">Bentuk Hukum Perusahaan</label>
                            <select wire:model.defer="bentuk_hukum_perusahaan"
                                class="form-select form-select-md  @error('bentuk_hukum_perusahaan') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Bentuk Hukum Perusahaan"> </option>
                                <option value="pt">PT</option>
                                <option value="cv">CV</option>
                                <option value="perorangan">Perorangan</option>
                            </select>
                            @error('bentuk_hukum_perusahaan')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Ijin Usaha yang dimiliki">Ijin Usaha yang
                                    dimiliki</label>
                                @error('kepemilikan_ijin_usaha')
                                    <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                        role="alert"><i data-feather="help-circle"></i>
                                        <p>{{ $message }}</p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="NPWP" type="checkbox"
                                                    wire:model.live="npwp">
                                                <label class="form-check-label" for="NPWP">NPWP</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text"
                                                    class="form-control @error('nomor_npwp') is-invalid @enderror"
                                                    wire:model.defer="nomor_npwp" placeholder="No NPWP"
                                                    @if (!$npwp) disabled @endif />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="NIB" type="checkbox"
                                                    wire:model.live="nib">
                                                <label class="form-check-label" for="NIB">NIB</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text"
                                                    class="form-control @error('nomor_nib') is-invalid @enderror"
                                                    wire:model.defer="nomor_nib" placeholder="No NIB"
                                                    @if (!$nib) disabled @endif />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="PIRT" type="checkbox"
                                                    wire:model.live="pirt">
                                                <label class="form-check-label" for="PIRT">PIRT</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text"
                                                    class="form-control @error('nomor_pirt') is-invalid @enderror"
                                                    wire:model.defer="nomor_pirt" placeholder="No PIRT"
                                                    @if (!$pirt) disabled @endif />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="Halal" type="checkbox"
                                                    wire:model.live="halal">
                                                <label class="form-check-label" for="Halal">Halal</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text"
                                                    class="form-control @error('nomor_halal') is-invalid @enderror"
                                                    wire:model.defer="nomor_halal" placeholder="No Halal"
                                                    @if (!$halal) disabled @endif />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="SNI" type="checkbox"
                                                    wire:model.live="sni">
                                                <label class="form-check-label" for="SNI">SNI</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text"
                                                    class="form-control @error('nomor_sni') is-invalid @enderror"
                                                    wire:model.defer="nomor_sni" placeholder="No SNI"
                                                    @if (!$sni) disabled @endif />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="BPOM" type="checkbox"
                                                    wire:model.live="bpom">
                                                <label class="form-check-label" for="BPOM">BPOM</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text"
                                                    class="form-control @error('nomor_bpom') is-invalid @enderror"
                                                    wire:model.defer="nomor_bpom" placeholder="No BPOM"
                                                    @if (!$bpom) disabled @endif />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="HKI" type="checkbox"
                                                    wire:model.live="hki">
                                                <label class="form-check-label" for="HKI">HKI</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text"
                                                    class="form-control @error('nomor_hki') is-invalid @enderror"
                                                    wire:model.defer="nomor_hki" placeholder="No HKI"
                                                    @if (!$hki) disabled @endif />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="form-label" for="Jumlah Tenaga Kerja Tetap">Jumlah Tenaga Kerja
                                    Tetap</label>
                                <div class="col-sm-6">
                                    <label class="form-label" for="Perempuan (Orang)">Perempuan (Orang)</label>
                                    <x-forms.money wire:model.defer="tenaga_kerja_tetap_perempuan"
                                        :placeholder="'Perempuan (Orang)'"></x-forms.money>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="Laki-Laki (Orang)">Laki-Laki (Orang)</label>
                                    <x-forms.money wire:model.defer="tenaga_kerja_tetap_laki_laki"
                                        :placeholder="'Laki-Laki (Orang)'"></x-forms.money>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="form-label" for="Jumlah Tenaga Kerja Lepas">Jumlah Tenaga Kerja
                                    Lepas</label>
                                <div class="col-sm-6">
                                    <label class="form-label" for="Perempuan (Orang)">Perempuan (Orang)</label>
                                    <x-forms.money wire:model.defer="tenaga_kerja_lepas_perempuan"
                                        :placeholder="'Perempuan (Orang)'"></x-forms.money>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="Laki-Laki (Orang)">Laki-Laki (Orang)</label>
                                    <x-forms.money wire:model.defer="tenaga_kerja_lepas_laki_laki"
                                        :placeholder="'Laki-Laki (Orang)'"></x-forms.money>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Modal Awal Usaha">Modal Awal Usaha</label>
                            <div class="input-group"><span class="input-group-text">Rp.</span>
                                <div class="form-floating">
                                    <x-forms.money wire:model.defer="modal_awal_usaha"
                                        :placeholder="'Modal Awal Usaha'"></x-forms.money>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Volume Produksi">Volume Produksi</label>
                            <x-forms.money wire:model.defer="volume_produksi" :placeholder="'Volume Produksi'"></x-forms.money>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Satuan Volume Produksi">Satuan Volume Produksi</label>
                            <select wire:model.defer="satuan_volume_produksi"
                                class="form-select form-select-md  @error('satuan_volume_produksi') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Satuan Volume Produksi"> </option>
                                @foreach ($this->satuan as $satuan)
                                    <option value="{{ $satuan->description }}">{{ $satuan->description }}</option>
                                @endforeach
                            </select>
                            @error('satuan_volume_produksi')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="Hasil Penjualan/Omzet">Hasil Penjualan/Omzet (per
                                bulan)</label>
                            <div class="input-group"><span class="input-group-text">Rp.</span>
                                <div class="form-floating">
                                    <x-forms.money wire:model.defer="omzet_penjualan"
                                        :placeholder="'Hasil Penjualan/Omzet'"></x-forms.money>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="Quantity Penjualan">Quantity Penjualan (per
                                bulan)(pcs)</label>
                            <x-forms.money wire:model.defer="quantity_penjualan" :placeholder="'Quantity Penjualan'"></x-forms.money>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="Kategori Usaha">Kategori Usaha</label>
                            <select wire:model.live="kategori_usaha"
                                class="form-select form-select-md  @error('kategori_usaha') is-invalid @enderror"
                                aria-label=".form-select-md example">
                                <option label="Pilih Kategori Usaha"> </option>
                                <option value="mikro">Mikro</option>
                                <option value="makro">Makro</option>
                            </select>
                            @error('kategori_usaha')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Keuntungan Bersih">Keuntungan Bersih (per
                                bulan)</label>
                            <div class="input-group"><span class="input-group-text">Rp.</span>
                                <div class="form-floating">
                                    <x-forms.money wire:model.defer="keuntungan_bersih"
                                        :placeholder="'Keuntungan Bersih'"></x-forms.money>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Keuntungan Bersih">Total Asset</label>
                                <div class="row mb-2">
                                    <label class="col-sm-3">Tanah & Bangunan</label>
                                    <div class="col-sm-9">
                                        <div class="input-group"><span class="input-group-text">Rp.</span>
                                            <div class="form-floating">
                                                <x-forms.money wire:model.defer="asset_tanah_bangunan"
                                                    :placeholder="'Total'"></x-forms.money>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-sm-3">Mesin & Peralatan</label>
                                    <div class="col-sm-9">
                                        <div class="input-group"><span class="input-group-text">Rp.</span>
                                            <div class="form-floating">
                                                <x-forms.money wire:model.defer="asset_mesin_peralatan"
                                                    :placeholder="'Total'"></x-forms.money>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-sm-3">Kendaraan</label>
                                    <div class="col-sm-9">
                                        <div class="input-group"><span class="input-group-text">Rp.</span>
                                            <div class="form-floating">
                                                <x-forms.money wire:model.defer="asset_kendaraan"
                                                    :placeholder="'Total'"></x-forms.money>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Jangkauan Pemasaran">Jangkauan Pemasaran</label>
                                @error('jangkauan_pemasaran')
                                    <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                        role="alert"><i data-feather="help-circle"></i>
                                        <p>{{ $message }}</p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="lokal" type="checkbox"
                                                    wire:model.live="lokal">
                                                <label class="form-check-label" for="lokal">Lokal</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="lintas_kabupaten_kota" type="checkbox"
                                                    wire:model.live="lintas_kabupaten_kota">
                                                <label class="form-check-label" for="Lintas Kabupaten/Kota">Lintas Kabupaten/Kota</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="lintas_provinsi" type="checkbox"
                                                    wire:model.live="lintas_provinsi">
                                                <label class="form-check-label" for="Lintas Provinsi">Lintas Provinsi</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="export" type="checkbox"
                                                    wire:model.live="export">
                                                <label class="form-check-label" for="Export">Export</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-item-center mt-2">
                                            <div class="col mt-1">
                                                <input class="form-check-input" id="online" type="checkbox"
                                                    wire:model.live="online">
                                                <label class="form-check-label" for="Online">Online</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text"
                                                    class="form-control @error('pemasaran_online') is-invalid @enderror"
                                                    wire:model.defer="pemasaran_online" placeholder="Pemasaran Online"
                                                    @if (!$online) disabled @endif />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Pembiayaan">Pembiayaan</label>
                                @error('pembiayaan')
                                    <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                        role="alert"><i data-feather="help-circle"></i>
                                        <p>{{ $message }}</p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" id="V" type="radio" name="pembiayaan"
                                        value="V" wire:model.live="pembiayaan">
                                    <label class="form-check-label" for="V">Ya</label>
                                    <input type="text"
                                        class="form-control @error('sumber_pembiayaan') is-invalid @enderror"
                                        wire:model.defer="sumber_pembiayaan" placeholder="Pembiayaan"
                                        @if ($pembiayaan != 'V') disabled @endif />
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" id="X" type="radio" name="pembiayaan"
                                        value="X" wire:model.live="pembiayaan">
                                    <label class="form-check-label" for="X">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Kemitraan">Kemitraan Dengan</label>
                                @error('kemitraan')
                                    <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                        role="alert"><i data-feather="help-circle"></i>
                                        <p>{{ $message }}</p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror
                                <div class="row">
                                    @foreach ($kemitraan as $index => $daerah)
                                        <div class="col-md-12 mb-2" wire:key="daerah-{{ $index }}">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ $loop->iteration }}</span>
                                                <div class="form-floating">
                                                    <x-forms.text
                                                        wire:model.defer="kemitraan.{{ $index }}.kemitraan"
                                                        :placeholder="'Kemitraan'"></x-forms.text>
                                                </div>
                                                <button class="btn btn-outline-danger" id="button-addon2"
                                                    type="button"
                                                    wire:click="deleteFieldKemitraan({{ $index }})">Hapus</button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-primary btn-block w-100" type="button"
                                            wire:click="addFieldKemitraan">Tambah Form Kemitraan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Pelatihan">Pelatihan</label>
                                @error('pelatihan')
                                    <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                        role="alert"><i data-feather="help-circle"></i>
                                        <p>{{ $message }}</p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" id="V" type="radio" name="pelatihan"
                                        value="V" wire:model.live="pelatihan">
                                    <label class="form-check-label" for="V">Ya</label>
                                    <select wire:model.defer="jenis_pelatihan"
                                        class="form-select form-select-md  @error('jenis_pelatihan') is-invalid @enderror"
                                        aria-label=".form-select-md example"
                                        @if ($pelatihan != 'V') disabled @endif>
                                        <option label="Pilih Jenis Pelatihan"> </option>
                                        @foreach ($this->pelatihans as $item)
                                            <option value="{{ $item->description }}">{{ $item->description }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" id="X" type="radio" name="pelatihan"
                                        value="X" wire:model.live="pelatihan">
                                    <label class="form-check-label" for="X">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Nama Produk">Nama Produk</label>
                                @error('nama_produk')
                                    <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                        role="alert"><i data-feather="help-circle"></i>
                                        <p>{{ $message }}</p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror
                                <div class="row">
                                    @foreach ($nama_produk as $index => $product)
                                        <div class="col-md-12 mb-2" wire:key="product-{{ $index }}">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ $loop->iteration }}</span>
                                                <div class="form-floating">
                                                    <x-forms.text
                                                        wire:model.defer="nama_produk.{{ $index }}.nama_produk"
                                                        :placeholder="'Nama Produk'"></x-forms.text>
                                                </div>
                                                <button class="btn btn-outline-danger" id="button-addon2"
                                                    type="button"
                                                    wire:click="deleteFieldNamaProduk({{ $index }})">Hapus</button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-primary btn-block w-100" type="button"
                                            wire:click="addFieldNamaProduk">Tambah Form Nama Produk</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="Foto Produk">Foto Produk</label>
                            <x-forms.file wire:model="document_produk" multiple allowImagePreview
                                imagePreviewMaxHeight="200"
                                acceptedFileTypes="['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/svg+xml']"
                                allowFileTypeValidation allowFileSizeValidation maxTotalFileSize="1024MB" />
                            @error('document_produk')
                                <span class="" style="margin-top: 0.25rem; font-size:0.8125rem; color: #ea5455;"
                                    role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="Foto Umkm">Foto Umkm</label>
                            <x-forms.file wire:model="document_umkm" multiple allowImagePreview
                                imagePreviewMaxHeight="200"
                                acceptedFileTypes="['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/svg+xml']"
                                allowFileTypeValidation allowFileSizeValidation maxTotalFileSize="1024MB" />
                            @error('document_umkm')
                                <span class="" style="margin-top: 0.25rem; font-size:0.8125rem; color: #ea5455;"
                                    role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Status UMKM">Status UMKM</label>
                                @error('pelatihan')
                                    <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                                        role="alert"><i data-feather="help-circle"></i>
                                        <p>{{ $message }}</p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" id="active" type="radio" name="status_umkm"
                                        value="active" wire:model.live="status_umkm">
                                    <label class="form-check-label" for="active">Active</label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" id="inactive" type="radio" name="status_umkm"
                                        value="inactive" wire:model.live="status_umkm">
                                    <label class="form-check-label" for="inactive">Inactive</label>
                                </div>
                            </div>
                        </div>

                        @if (count($current_document_produk) > 0)
                            <div class="col-md-12">
                                <div class="table-responsive theme-scrollbar signal-table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Foto</th>
                                                <th>File Name</th>
                                                <th>File Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($current_document_produk as $key => $document)
                                                @if ($document['state'] == 'current')
                                                    <tr wire:key="document-{{ $document['id'] }}">
                                                        <td>
                                                            @if (Storage::disk('local')->exists($document['file_path'] . '/' . $document['file_name']))
                                                                <img src="{{ asset(Storage::url($document['file_path'] . '/' . $document['file_name'])) }}"
                                                                    alt="" class="img-fluid img-thumbnail"
                                                                    style="width: 200px;">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $document['file_name'] }}
                                                        </td>
                                                        <td>
                                                            {{ $document['file_type'] }}
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-block w-100"
                                                                type="button"
                                                                wire:click="deleteCurrentDocumentProduct({{ $key }})">Delete</button>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                        <div class="col-12">
                            <button class="btn btn-primary" wire:click="store">Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
