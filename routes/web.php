<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventarisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ProkerController;

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
    return view ('beranda',[
        "title" => "Beranda"
    ]);
});

Route::get('/program', function () {
    return view ('program',[
        "title" => "Program"
    ]);
});

Route::get('/tehim', function () {
    return view ('tehim',[
        "title" => "Profil"
    ]);
});



Route::resource('pengurus', PengurusController::class);
Route::resource('inventaris', InventarisController::class);
Route::resource('proker', ProkerController::class);




Route::get('/stror', function () {
    return view ('stror',[
        "title" => "Profil"
    ]);
});


Route::get('/log_user', function () {
    return view ('log_user',[
        "title" => "masuk"
    ]);
});

Route::get('/log_admin', function () {
    return view ('log_admin',[
        "title" => "masuk"
    ]);
});

Route::get('/log_kabid', function () {
    return view ('log_kabid',[
        "title" => "masuk"
    ]);
});

Route::get('/register', function () {
    return view ('register',[
        "title" => "masuk"
    ]);
});

Route::get('/admin.index', function () {
    return view ('admin.index');
});

Route::get('/user.isi', function () {
    return view ('user.isi');
});

Route::get('/kabid.in', function () {
    return view ('kabid.in');
});



// Route::get('/DataPengurus.datapeng', function () {
//     return view ('DataPengurus.datapeng',[
//         "title" => "datapeng"
//     ]);
// });



Route::get('/datakeg', function () {
    return view('kegiatan.datakeg', [
        "title" => "datakeg"
    ]);
});

Route::get('/databid', function () {
    return view('Data.databid', [
        "title" => "databid"
    ]);
});

Route::get('/datap', function () {
    return view('Proker/datap', [
        "title" => "datap"
    ]);
});

Route::get('/datainven', function () {
    return view('int.datainven', [
        "title" => "datainven"
    ]);
});

Route::get('/pengumuman', function () {
    return view('umum.pengumuman', [
        "title" => "pengumuman"
    ]);
});

Route::get('/up', function () {
    return view('pu.up', [
        "title" => "up"
    ]);
});

Route::get('/kegihim', function () {
    return view('user.kehim.kegihim', [
        "title" => "kegihim"
    ]);
});

Route::get('/inventarisuser', function () {
    return view('user.inventarisuser', [
        "title" => "inventaris"
    ]);
});

Route::get('/pengurususer', function () {
    return view('user.pengurususer', [
        "title" => "pengurus"
    ]);
});

Route::get('/kegiatanuser', function () {
    return view('user.kegiatanuser', [
        "title" => "kegiatan"
    ]);
});

Route::get('/prokeruser', function () {
    return view('user.prokeruser', [
        "title" => "proker"
    ]);
});

Route::get('/bidanguser', function () {
    return view('user.bidanguser', [
        "title" => "bidang"
    ]);
});

Route::get('/pengumumanuser', function () {
    return view('user.pengumumanuser', [
        "title" => "pengumuman"
    ]);
});

Route::get('/inventarisadmin', function () {
    return view('admin.inventarisadmin', [
        "title" => "inventarisadmin"
    ]);
});

Route::get('/inventariskabid', function () {
    return view('kabid.inventariskabid', [
        "title" => "inventaris"
    ]);
});

Route::get('/kabid.in', function () {
    return view ('kabid.in');
});






Route::get('/register', [AuthController::class, 'loadRegister'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('daftarregister');
Route::get('/login', function() {
    return redirect('/');
});

Route::get('/login', [AuthController::class, 'loadLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);



// **** Admin Routes ***
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
});

// **** kabid Routes ***
Route::group(['prefix' => 'kabid','middleware'=>['web','isKabid']],function(){
    Route::get('/dashboard',[KabidController::class,'dashboard']);
});

// **** User Routes ***
Route::group(['prefix' => 'user','middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard']);
});







