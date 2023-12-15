<?php

use App\Http\Controllers\BantuanBencanaAlamController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\EmigrasiController;
use App\Http\Controllers\ImigrasiController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\Keluarga_OrangTuaController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KeluargaTempatTinggalController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\MediaSosialController;
use App\Http\Controllers\MigrasiController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PekerjaanPenghasilanController;
use App\Http\Controllers\PenanggungJawabController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PenghasilanController;
use App\Http\Controllers\PerkawinanController;
use App\Http\Controllers\PersentasePenyakitController;
use App\Http\Controllers\PNSController;
use App\Http\Controllers\RiwayatPenyakitController;
use App\Http\Controllers\SwastaController;
use App\Http\Controllers\TempatTinggalController;
use App\Http\Controllers\TransmigrasiController;
use App\Http\Controllers\WirausahaController;
use App\Http\Controllers\WNAController;
use App\Models\KeluargaPerkawinan;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Template\Template;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penduduk', [PendudukController::class, 'index']);
Route::post('/save-penduduk', [PendudukController::class, 'create']);
Route::post('/{id}/update-penduduk', [PendudukController::class, 'update']);
Route::post('/{id}/delete-penduduk', [PendudukController::class, 'delete']);

Route::get('/wna', [WNAController::class, 'index']);
Route::post('/save-wna', [WNAController::class, 'create']);
Route::post('/{id}/update-wna', [WNAController::class, 'update']);
Route::post('/{id}/delete-wna', [WNAController::class, 'delete']);

Route::get('/keluarga', [KeluargaController::class, 'index']);
Route::post('/save-keluarga', [KeluargaController::class, 'create']);
Route::post('/{id}/update-keluarga', [KeluargaController::class, 'update']);
Route::post('/{id}/delete-keluarga', [KeluargaController::class, 'delete']);

Route::get('/penanggungjawab', [PenanggungJawabController::class, 'index']);
Route::post('/save-penanggungjawab', [PenanggungJawabController::class, 'create']);
Route::post('/{id}/update-penanggungjawab', [PenanggungJawabController::class, 'update']);
Route::post('/{id}/delete-penanggungjawab', [PenanggungJawabController::class, 'delete']);

Route::get('/keluarga-tempattinggal', [KeluargaTempatTinggalController::class, 'index']);
Route::post('/save-keluarga-tempattinggal', [KeluargaTempatTinggalController::class, 'create']);
Route::post('/{id}/update-keluarga-tempattinggal', [KeluargaTempatTinggalController::class, 'update']);
Route::post('/{id}/delete-keluarga-tempattinggal', [KeluargaTempatTinggalController::class, 'delete']);

Route::get('/keluarga-perkawinan', [KeluargaPerkawinan::class, 'index']);
Route::post('/save-keluarga-perkawinan', [KeluargaPerkawinan::class, 'create']);
Route::post('/{id}/update-keluarga-perkawinan', [KeluargaPerkawinan::class, 'update']);
Route::post('/{id}/delete-keluarga-perkawinan', [KeluargaPerkawinan::class, 'delete']);

Route::get('/kelahiran', [KelahiranController::class, 'index']);
Route::post('/save-kelahiran', [KelahiranController::class, 'create']);
Route::post('/{id}/update-kelahiran', [KelahiranController::class, 'update']);
Route::post('/{id}/delete-kelahiran', [KelahiranController::class, 'delete']);

Route::get('/kematian', [KematianController::class, 'index']);
Route::post('/save-kematian', [KematianController::class, 'create']);
Route::post('/{id}/update-kematian', [KematianController::class, 'update']);
Route::post('/{id}/delete-kematian', [KematianController::class, 'delete']);

Route::get('/pajak', [PajakController::class, 'index']);
Route::post('/save-pajak', [PajakController::class, 'create']);
Route::post('/{id}/update-pajak', [PajakController::class, 'update']);
Route::post('/{id}/delete-pajak', [PajakController::class, 'delete']);

Route::get('/bantuan', [BantuanController::class, 'index']);
Route::post('/save-bantuan', [BantuanController::class, 'create']);
Route::post('/{id}/update-bantuan', [BantuanController::class, 'update']);
Route::post('/{id}/delete-bantuan', [BantuanController::class, 'delete']);

Route::get('/pekerjaan', [PekerjaanController::class, 'index']);
Route::post('/save-pekerjaan', [PekerjaanController::class, 'create']);
Route::post('/{id}/update-pekerjaan', [PekerjaanController::class, 'update']);
Route::post('/{id}/delete-pekerjaan', [PekerjaanController::class, 'delete']);

Route::get('/pns', [PNSController::class, 'index']);
Route::post('/save-pns', [PNSController::class, 'create']);
Route::post('/{id}/update-pns', [PNSController::class, 'update']);
Route::post('/{id}/delete-pns', [PNSController::class, 'delete']);

Route::get('/swasta', [SwastaController::class, 'index']);
Route::post('/save-swasta', [SwastaController::class, 'create']);
Route::post('/{id}/update-swasta', [SwastaController::class, 'update']);
Route::post('/{id}/delete-swasta', [SwastaController::class, 'delete']);

Route::get('/wiraswasta', [WirausahaController::class, 'index']);
Route::post('/save-wiraswasta', [WirausahaController::class, 'create']);
Route::post('/{id}/update-wiraswasta', [WirausahaController::class, 'update']);
Route::post('/{id}/delete-wiraswasta', [WirausahaController::class, 'delete']);

Route::get('/medsos', [MediaSosialController::class, 'index']);
Route::post('/save-medsos', [MediaSosialController::class, 'create']);
Route::post('/{id}/update-medsos', [MediaSosialController::class, 'update']);
Route::post('/{id}/delete-medsos', [MediaSosialController::class, 'delete']);

Route::get('/pendidikan', [PendidikanController::class, 'index']);
Route::post('/save-pendidikan', [PendidikanController::class, 'create']);
Route::post('/{id}/update-pendidikan', [PendidikanController::class, 'update']);
Route::post('/{id}/delete-pendidikan', [PendidikanController::class, 'delete']);

Route::get('/migrasi', [MigrasiController::class, 'index']);
Route::post('/save-migrasi', [MigrasiController::class, 'create']);
Route::post('/{id}/update-migrasi', [MigrasiController::class, 'update']);
Route::post('/{id}/delete-migrasi', [MigrasiController::class, 'delete']);

Route::get('/transmigrasi', [TransmigrasiController::class, 'index']);
Route::post('/save-transmigrasi', [TransmigrasiController::class, 'create']);
Route::post('/{id}/update-transmigrasi', [TransmigrasiController::class, 'update']);
Route::post('/{id}/delete-transmigrasi', [TransmigrasiController::class, 'delete']);

Route::get('/emigrasi', [EmigrasiController::class, 'index']);
Route::post('/save-emigrasi', [EmigrasiController::class, 'create']);
Route::post('/{id}/update-emigrasi', [EmigrasiController::class, 'update']);
Route::post('/{id}/delete-emigrasi', [EmigrasiController::class, 'delete']);

Route::get('/imigrasi', [ImigrasiController::class, 'index']);
Route::post('/save-imigrasi', [ImigrasiController::class, 'create']);
Route::post('/{id}/update-imigrasi', [ImigrasiController::class, 'update']);
Route::post('/{id}/delete-imigrasi', [ImigrasiController::class, 'delete']);

Route::get('/penyakit', [RiwayatPenyakitController::class, 'index']);
Route::post('/save-penyakit', [RiwayatPenyakitController::class, 'create']);
Route::post('/{id}/update-penyakit', [RiwayatPenyakitController::class, 'update']);
Route::post('/{id}/delete-penyakit', [RiwayatPenyakitController::class, 'delete']);

Route::get('/penghasilan', [PenghasilanController::class, 'index']);
Route::post('/save-penghasilan', [PenghasilanController::class, 'create']);
Route::post('/{id}/update-penghasilan', [PenghasilanController::class, 'update']);
Route::post('/{id}/delete-penghasilan', [PenghasilanController::class, 'delete']);

Route::get('/pekerjaan-penghasilan', [PekerjaanPenghasilanController::class, 'index']);
Route::post('/save-pekerjaan-penghasilan', [PekerjaanPenghasilanController::class, 'create']);
Route::post('/{id}/update-pekerjaan-penghasilan', [PekerjaanPenghasilanController::class, 'update']);
Route::post('/{id}/delete-pekerjaan-penghasilan', [PekerjaanPenghasilanController::class, 'delete']);

Route::get('/tempattinggal', [TempatTinggalController::class, 'index']);
Route::post('/save-tempattinggal', [TempatTinggalController::class, 'create']);
Route::post('/{id}/update-tempattinggal', [TempatTinggalController::class, 'update']);
Route::post('/{id}/delete-tempattinggal', [TempatTinggalController::class, 'delete']);

Route::get('/perkawinan', [PerkawinanController::class, 'index']);
Route::post('/save-perkawinan', [PerkawinanController::class, 'create']);
Route::post('/{id}/update-perkawinan', [PerkawinanController::class, 'update']);
Route::post('/{id}/delete-perkawinan', [PerkawinanController::class, 'delete']);

Route::get('/persentase-penyakit', [PersentasePenyakitController::class, 'namaPenyakitPersentase']);
Route::get('/daftarbantuan', [BantuanBencanaAlamController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
