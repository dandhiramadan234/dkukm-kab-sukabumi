<?php

use App\Livewire\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Setting\Satuan;
use App\Livewire\Admin\Form\FormCreateUmkm;
use App\Livewire\Admin\Form\FormUpdateUmkm;
use App\Livewire\Admin\User\UserManagement;
use App\Livewire\Admin\Dashboard\Dashboard as DashboardAdmin;

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

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard', DashboardAdmin::class)->name('dashboard-admin');
    Route::get('/form-create-umkm', FormCreateUmkm::class)->name('form-create-umkm');
    Route::get('/form-update-umkm/{id}', FormUpdateUmkm::class)->name('form-update-umkm');
    Route::get('/satuan', Satuan::class)->name('satuan');
    Route::get('/user-management', UserManagement::class)->name('user-management');
    
    Route::post('/logout', [Logout::class, 'logout'])->name('logout');
});

Route::get('/unauthorized', function () {
    return 'You are not authorized to access this page.';
})->name('unauthorized');
