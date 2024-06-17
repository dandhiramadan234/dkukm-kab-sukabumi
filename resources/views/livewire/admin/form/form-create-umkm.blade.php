<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Form</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3" wire:submit="store">
                        <div class="col-md-12">
                            <label class="form-label" for="Nama UMKM">Nama UMKM</label>
                            <x-forms.text wire:model.defer="nama_umkm" :placeholder="'Nama UMKM'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Nama Pemilik">Nama Pemilik</label>
                            <x-forms.text wire:model.defer="nama_pemilik" :placeholder="'Nama Pemilik'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="NIK">NIK</label>
                            <x-forms.text wire:model.defer="nik" :placeholder="'NIK'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="No Handphone/Telephone">No Handphone/Telephone</label>
                            <x-forms.text wire:model.defer="no_handphone" :placeholder="'No Handphone/Telephone'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Email">Email</label>
                            <x-forms.email wire:model.defer="email" :placeholder="'Email'"></x-forms.email>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="Tempat Lahir">Tempat Lahir</label>
                            <x-forms.text wire:model.defer="tempat_lahir" :placeholder="'Tempat Lahir'"></x-forms.text>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="Tanggal Lahir">Tanggal Lahir</label>
                            <x-forms.date wire:model.defer="tanggal_lahir" :placeholder="'Tanggal Lahir'"></x-forms.date>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="Umur">Umur</label>
                            <x-forms.text wire:model.defer="umur" :placeholder="'Umur'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
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
                        <div class="col-md-12">
                            <label class="form-label" for="Status Perkawinan">Status Perkawinan</label>
                            <x-forms.text wire:model.defer="status_perkawinan" :placeholder="'Status Perkawinan'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Pendidikan">Pendidikan</label>
                            <x-forms.text wire:model.defer="pendidikan" :placeholder="'Pendidikan'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Alamat Rumah">Alamat Rumah</label>
                            <x-forms.text wire:model.defer="alamat_rumah" :placeholder="'Alamat Rumah'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Alamat Usaha">Alamat Usaha</label>
                            <x-forms.text wire:model.defer="alamat_usaha" :placeholder="'Alamat Usaha'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
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
                        <div class="col-md-12">
                            <label class="form-label" for="Jenis Usaha">Jenis Usaha</label>
                            <select wire:model.defer="jenis_usaha"
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
                            <label class="form-label" for="No Ijin Usaha">No Ijin Usaha</label>
                            <x-forms.text wire:model.defer="no_ijin_usaha" :placeholder="'No Ijin Usaha'"></x-forms.text>
                        </div>
                        <div class="col-md-12">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Ijin Usaha yang dimiliki">Ijin Usaha yang
                                    dimiliki</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" id="NPWP" type="checkbox"
                                                value="NPWP" wire:model="kepemilikan_ijin_usaha">
                                            <label class="form-check-label" for="NPWP">NPWP</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="NIB" type="checkbox"
                                                value="NIB" wire:model="kepemilikan_ijin_usaha">
                                            <label class="form-check-label" for="NIB">NIB</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="PIRT" type="checkbox"
                                                value="PIRT" wire:model="kepemilikan_ijin_usaha">
                                            <label class="form-check-label" for="PIRT">PIRT</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="Halal" type="checkbox"
                                                value="Halal" wire:model="kepemilikan_ijin_usaha">
                                            <label class="form-check-label" for="Halal">Halal</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" id="SNI" type="checkbox"
                                                value="SNI" wire:model="kepemilikan_ijin_usaha">
                                            <label class="form-check-label" for="SNI">SNI</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="BPOM" type="checkbox"
                                                value="BPOM" wire:model="kepemilikan_ijin_usaha">
                                            <label class="form-check-label" for="BPOM">BPOM</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="HKI" type="checkbox"
                                                value="HKI" wire:model="kepemilikan_ijin_usaha">
                                            <label class="form-check-label" for="HKI">HKI</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="Lainnya" type="checkbox"
                                                value="Lainnya" wire:model="kepemilikan_ijin_usaha">
                                            <x-forms.text wire:model="kepemilikan_ijin_usaha_lainnya"
                                                :placeholder="'Lainnya'"></x-forms.text>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
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
                        <div class="col-md-12">
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
                                <option value="unit">Unit</option>
                                <option value="pcs">Pcs</option>
                            </select>
                            @error('satuan_volume_produksi')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Hasil Penjualan/Omzet">Hasil Penjualan/Omzet (per
                                bulan)</label>
                            <x-forms.money wire:model.defer="omzet_penjualan" :placeholder="'Hasil Penjualan/Omzet'"></x-forms.money>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="Quantity Penjualan">Quantity Penjualan (per
                                bulan)(pcs)</label>
                            <x-forms.money wire:model.defer="quantity_penjualan" :placeholder="'Quantity Penjualan'"></x-forms.money>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="Keuntungan Bersih">Keuntungan Bersih (per
                                bulan)</label>
                            <x-forms.money wire:model.defer="keuntungan_bersih" :placeholder="'Keuntungan Bersih'"></x-forms.money>
                        </div>
                        <div class="col-md-12"><label class="form-label" for="Keuntungan Bersih">Total Asset</label>
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
                        <div class="col-md-12">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Daerah Pemasaran">Daerah Pemasaran</label>
                                <div class="row">
                                    @foreach ($daerah_pemasaran as $index => $daerah)
                                        <div class="col-md-12 mb-2">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ $loop->iteration }}</span>
                                                <div class="form-floating">
                                                    <x-forms.money
                                                        wire:model.defer="daerah_pemasaran.{{ $index }}.daerah_pemasaran"
                                                        :placeholder="'Daerah Pemasaran'"></x-forms.money>
                                                </div>
                                                <button class="btn btn-outline-danger" id="button-addon2"
                                                    type="button"
                                                    wire:click="deleteFieldDaerahPemasaran({{ $index }})">Hapus</button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-primary btn-block w-100" type="button"
                                            wire:click="addFieldDaerahPemasaran">Tambah Form Daerah Pemasaran</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Kemitraan">Kemitraan Dengan</label>
                                <div class="row">
                                    @foreach ($kemitraan as $index => $daerah)
                                        <div class="col-md-12 mb-2">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ $loop->iteration }}</span>
                                                <div class="form-floating">
                                                    <x-forms.money
                                                        wire:model.defer="kemitraan.{{ $index }}.kemitraan"
                                                        :placeholder="'Kemitraan'"></x-forms.money>
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
                        <div class="col-md-12">
                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                <label class="form-label" for="Pelatihan">Pelatihan</label>
                                <div class="form-check">
                                    <input class="form-check-input" id="YA" type="radio"
                                        name="pelatihan" value="ya" wire:model="pelatihan">
                                    <label class="form-check-label" for="YA">YA</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="Tidak" type="radio"
                                        name="pelatihan" value="tidak" wire:model="pelatihan">
                                    <label class="form-check-label" for="Tidak">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
