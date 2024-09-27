<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Import Data</h4>
                </div>
                <div class="card-body">
                    @if (session()->has('error'))
                        <div class="alert alert-light-danger light alert-dismissible fade show txt-danger border-left-danger"
                            role="alert"><i data-feather="help-circle"></i>
                            <p>{{ session('error') }}</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label" for="File Import">File Import (Max : 2048 KB)</label>
                            <x-forms.file wire:model="document_import" allowImagePreview imagePreviewMaxHeight="200"
                                allowFileTypeValidation allowFileSizeValidation maxTotalFileSize="2048KB" />
                            <span class="" style="margin-top: 0.25rem; font-size:0.8125rem;" role="alert">
                                *Jika hasil import dan data tidak bertambah, maka data NIK sebelumnya sudah terdaftar
                            </span>
                            @error('document_import')
                                <span class="" style="margin-top: 0.25rem; font-size:0.8125rem; color: #ea5455;"
                                    role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button class="btn btn-info" wire:click="downloadTemplate">Download Template Import
                            </button>
                            <button class="btn btn-primary" wire:click="store">Import </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
