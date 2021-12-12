<?php

use App\Http\Controllers\CertificateOfScholarship;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//dashboard
Route::get('/', function () {
    return view('welcome');
});

// certificate of Scholarship
Route::get('/certificate-of-scholarship', [CertificateOfScholarship::class, 'viewForm'])->name('certificate-of-scholarship');
Route::post('/certificate-of-scholarship/submit', [CertificateOfScholarship::class, 'store'])->name('certificate-of-scholarship.store');

//disabled the register method
Auth::routes([
    'register' => false
]);

//admin tu mapan dtuy
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
