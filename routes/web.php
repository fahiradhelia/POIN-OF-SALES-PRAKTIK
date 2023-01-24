<?php
//ini adalah controller register
Use App\Http\Controllers\RegisterController;

//ini adalah controller login
Use App\Http\Controllers\LoginController;

//ini adalah controller transaksi
Use App\Http\Controllers\TransaksiController;

//ini adalaah controller barang
Use App\Http\Controllers\barangController;

//ini adalaah controller Distributor
Use App\Http\Controllers\DistributorController;

//ini adalah controller merek
Use App\Http\Controllers\MerekController;

//ini adalah controller rayon
Use App\Http\Controllers\RayonController;

//ini adalah controller siswa
Use App\Http\Controllers\SiswaController;

//ini adalah controller produk
Use App\Http\Controllers\ProductController;

//ini adalah controller rombel
Use App\Http\Controllers\RombelController;



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});
//ini adalah controller produk
Route::resource('products', ProductController::class);

//ini adalah controller siswa
Route::resource('siswas', SiswaController::class);

//ini adalah controller rombel
Route::resource('rombels', RombelController::class);

//ini adalah controller rayon
Route::resource('rayons', RayonController::class);

//ini adalah controller merek
Route::resource('mereks', MerekController::class);

//ini adalah controller distributor
Route::resource('distributors', DistributorController::class);

//ini adalah controller barang
Route::resource('barangs', BarangController::class);

//ini adalah controller transaksi
Route::resource('transaksis', TransaksiController::class);

//ini adalah controller login
Route::resource('logins', LoginController::class);

//ini adalah controller sign-up
Route::get('/sign-up', [LoginController::class, 'register']);



