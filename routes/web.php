<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\pengaduancontroller;
use App\Http\Controllers\masyarakatcontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\loginpetugascontroller;




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

Route::get('/coba', function(){
    
    return "ZAMY GANTENG";
});



Route::middleware(['auth'])->group(function () {


    
Route::get('/home', [pengaduancontroller::class, 'index']);

Route::get('/buat-laporan', [pengaduancontroller::class, 'buat_laporan']);

Route::POST('/buat_laporan', [pengaduancontroller::class, 'proses_pengaduan']);

Route::get('/delet/{id}', [pengaduancontroller::class, 'hapus']);

Route::get('/detail/masyarakat/{id}', [pengaduancontroller::class, 'detailmasyarakat']);



Route::post('/update/{id}', [pengaduancontroller::class, 'proses_update']);

Route::get('/update/{id}', [pengaduancontroller::class, 'update_data']);



Route::get('/data_masyarakat', [masyarakatcontroller::class, 'tampil']);

Route::get('/daftar', [masyarakatcontroller::class, 'tambahkan_masyarakat']);

Route::POST('/tambah', [masyarakatcontroller::class, 'proses_tambah']);



Route::get('/data_petugas', [masyarakatcontroller::class, 'tampilkan']);





});





Route::get('/login', [logincontroller::class, 'login'])->name('login');

Route::post('/login', [logincontroller::class, 'proses_login']);


Route::get('/daftar', [logincontroller::class, 'daftar']);

Route::post('/daftar', [logincontroller::class, 'proses_daftar']);

Route::get('/logout', [logincontroller::class, 'proses_logout']);





Route::middleware(['petugas'])->group(function () {

    Route::get('/home-petugas', [loginpetugascontroller::class, 'petugashome']);

    Route::get('/detail/{id}', [loginpetugascontroller::class, 'detail_']);

    Route::get('/update_/{id}', [loginpetugascontroller::class, 'update_data']);

    Route::post('/update_/{id}', [loginpetugascontroller::class, 'proses_update']);



    
    Route::get('/data_masyarakat', [loginpetugascontroller::class, 'tampil']);

    Route::get('/data_petugas', [loginpetugascontroller::class, 'tampilkan']);

    


});


Route::get('/login-petugas', [loginpetugascontroller::class,'loginpetugas']);

Route::post('/proses-petugas', [loginpetugascontroller::class,'proseslogin']);


Route::get('/tambahkan_petugas', [masyarakatcontroller::class, 'tambah_petugas']);

Route::POST('/tambah_petugas', [masyarakatcontroller::class, 'proses_petugas']);

Route::get('/petugas/logout', [loginpetugascontroller::class, 'proseslogout']);


























Route::get('/about', function(){
    return view('about');
});



Route::get('/navbar', function(){
    return view('navbar');
});



