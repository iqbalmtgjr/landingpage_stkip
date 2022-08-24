<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

// Tentang
Route::get('/selayang-pandang', function () {
    return view('pages.tentang.selayangpandang');
});

Route::get('/visi-misi-tujuan', function () {
    return view('pages.tentang.visi_misi_tujuan');
});

Route::get('/struktur-organisasi', function () {
    return view('pages.tentang.struktur_organisasi');
});

//PMB
Route::get('/pmb', function () {
    return view('pages.pmb.pmb');
});

//Informasi
Route::get('/unduh-surat', function () {
    return view('pages.informasi.unduh_surat');
});

Route::get('/informasi-beasiswa', function () {
    return view('pages.informasi.informasi_beasiswa');
});

Route::get('/berita', function () {
    return view('pages.informasi.berita');
});

Route::get('/agenda', function () {
    return view('pages.informasi.agenda');
});

//Lembaga
Route::get('/kemahasiswaan-dan-alumni', function () {
    return view('pages.lembaga.kemahasiswaan_dan_alumni');
});

Route::get('/kewirausahaan', function () {
    return view('pages.lembaga.kewirausahaan');
});

Route::get('/upt-lab-dan-microteaching', function () {
    return view('pages.lembaga.upt_lab_dan_microteaching');
});

Route::get('/lembaga-budaya-dan-bhs-kalimantan', function () {
    return view('pages.lembaga.lembaga_budaya_dan_bhs_kalimantan');
});

Route::get('/lembaga-penelitian-dan-pengabdian-masyarakat', function () {
    return view('pages.lembaga.lembaga_penelitian_dan_pengabdian_masyarakat');
});

Route::get('/upt-perpus', function () {
    return view('pages.lembaga.upt_perpus');
});