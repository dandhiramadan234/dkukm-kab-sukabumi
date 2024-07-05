<?php

namespace App\Livewire\Admin\Import;

use Livewire\Component;
use App\Imports\UmkmImport;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

#[Title('Import Data UMKM')]
class DataUmkmImport extends Component
{
    use WithFileUploads;

    public $document_import = [];

    public function render()
    {
        return view('livewire.admin.import.data-umkm-import');
    }

    public function store()
    {
        $this->validate(
            [
                'document_import' => 'required|max:1024',
            ],
            [
                'document_import.required' => 'File import harus diisi.',
                'document_import.max' => 'File tidak boleh lebih dari 1024 KB.',
            ],
        );

        try {
            DB::beginTransaction();

            $folder = 'public/import-excel';

            foreach ($this->document_import as $file) {
                $lastDotPosition = strrpos($file->getClientOriginalName(), '.');
                $extension = substr($file->getClientOriginalName(), $lastDotPosition + 1);

                $uniqueId = uniqid();
                $fileName = 'file-import-' . $uniqueId . '.' . $extension;

                $file->storeAs($folder, $fileName);
                $filePath = storage_path('app/' . $folder . '/' . $fileName);

                $import = Excel::import(new UmkmImport(), $filePath);
            }

            // Commit transaksi database jika sukses
            DB::commit();

            // Tampilkan notifikasi sukses
            $this->dispatch('swal:success', [
                'type' => 'success',
                'title' => 'Data berhasil diimpor!',
                'text' => 'Data telah berhasil disimpan.',
                'route' => route('data-umkm-import'),
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            // Tangani error jika terjadi kesalahan saat mengimpor
            $this->dispatch('swal:error', [
                'type' => 'error',
                'title' => 'Error!',
                'text' => 'Terjadi kesalahan saat mengimpor data.',
            ]);
        }
    }

    public function downloadTemplate()
    {
        $file = public_path('template_import.xlsx');
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ];

        return Response::download($file, 'template_import.xlsx', $headers);
    }
}
