<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodDonationDataController;
use App\Models\blood_donation_data;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/index', [BloodDonationDataController::class, 'index']);

Route::get('add', [BloodDonationDataController::class, 'create'])->name('add');
Route::post('store', [BloodDonationDataController::class, 'store'])->name('store');

Route::get('edit/{$blood_donation_data_id}', [BloodDonationDataController::class, 'update'])->name('edit');
Route::post('edit-store', [BloodDonationDataController::class, 'editStore'])->name('editStore');

Route::delete('delete', [BloodDonationDataController::class, 'destroy'])->name('delete');

