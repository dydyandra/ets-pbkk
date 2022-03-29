<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RecordController;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Record;

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
    return view('welcome');
});


Route::get('/form', [FormController::class, 'form']);
Route::post('/proses', [FormController::class, 'proses']);


// Route::get("/record", [RecordController::class, 'index']);

Route::get('/record', function(){
    return view('records', [
        'title' => "List Rekam Medius",
        'records' => Record::all(),
    ]);
});

Route::get('/record/{record:slug}', [RecordController::class, 'content']);


Route::get('/dokter', function(){
    return view('pasien', [
        'title' => 'List Dokter',
        'persons' => Dokter::all(),
        'field' => 'dokter'
    ]);
});

Route::get('/dokter/{dokter:slug}', function(Dokter $dokter){
    return view('records', [
        'title' => "Rekam Medis oleh: $dokter->nama",
        'records' => $dokter->records->load('dokter', 'pasien'),
        'dokter' => $dokter->nama
    ]);
});

Route::get('/pasien', function(){
    return view('pasien', [
        'title' => 'List Pasien',
        // 'persons' => Pasien::has('records')->get(),
        'persons' => Pasien::all(),
        'field' => 'pasien'
    ]);
});

Route::get('/pasien/{pasien:slug}', function(Pasien $pasien){
    return view('records', [
        'title' => "Riwayat Pasien $pasien->nama",
        'records' => $pasien->records->load('pasien', 'dokter'),
    ]);
});
