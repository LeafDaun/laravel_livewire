<?php


use App\Livewire\Home;
use App\Livewire\Jurusan\EditJurusan;
use App\Livewire\Jurusan\ShowJurusan;
use Illuminate\Support\Facades\Route;
use App\Livewire\Jurusan\CreateJurusan;
use App\Livewire\Mahasiswa\MahasiswaEdit;
use App\Livewire\Mahasiswa\MahasiswaList;
use App\Livewire\Mahasiswa\MahasiswaCreate;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);

Route::prefix('/mahasiswa')->group(function(){
    Route::get('/', MahasiswaList::class);
    Route::get('/create', MahasiswaCreate::class);
    Route::get('/delete/{id}', MahasiswaList::class);
    Route::get('/{mhs}/edit', MahasiswaEdit::class);  
});

Route::prefix('/jurusan')->group(function(){
    Route::get('/', ShowJurusan::class);
    Route::get('/create', CreateJurusan::class);
    Route::get('/delete/{id}', ShowJurusan::class);
    Route::get('/{jr}/edit', EditJurusan::class);
});
