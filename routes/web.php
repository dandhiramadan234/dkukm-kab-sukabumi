<?php

use App\Livewire\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Setting\Satuan;
use App\Livewire\Admin\Setting\Pelatihan;
use App\Livewire\Admin\Form\FormUpdateUmkm;
use App\Livewire\Admin\User\UserManagement;
use App\Livewire\Admin\Export\DataUmkmExport;
use App\Livewire\Admin\Import\DataUmkmImport;
use App\Livewire\Admin\Dashboard\Dashboard as DashboardAdmin;
use App\Livewire\User\Form\FormCreateUmkm as FormCreateUmkmUser;
use App\Livewire\Admin\Form\FormCreateUmkm as FormCreateUmkmAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', Login::class)->name('login');
});

Route::post('/logout', [Logout::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard', DashboardAdmin::class)->name('dashboard-admin');
    Route::get('/form-create-umkm', FormCreateUmkmAdmin::class)->name('form-create-umkm');
    Route::get('/form-update-umkm/{id}', FormUpdateUmkm::class)->name('form-update-umkm');
    Route::get('/export-data', DataUmkmExport::class)->name('data-umkm-export');
    Route::get('/import-data', DataUmkmImport::class)->name('data-umkm-import');
    Route::get('/satuan', Satuan::class)->name('satuan');
    Route::get('/pelatihan', Pelatihan::class)->name('pelatihan');
    Route::get('/user-management', UserManagement::class)->name('user-management');
});

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/form-create-umkm-user', FormCreateUmkmUser::class)->name('form-create-umkm-user');
});

Route::get('/unauthorized', function () {
    return 'You are not authorized to access this page.';
})->name('unauthorized');
