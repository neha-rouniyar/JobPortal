<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [JobSeekerController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//admin         
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/post-job', [AdminController::class, 'job_post'])->name('admin.job_post');
Route::get('/view-jobs', [AdminController::class, 'view_jobs'])->name('admin.view_jobs');
Route::post('/submit-job-form', [AdminController::class, 'post_job'])->name('admin.post_job');
Route::get('/view-job-detail/{id}', [AdminController::class, 'view_job_detail'])->name('admin.view_job_detail');
Route::get('/applicants-list', [AdminController::class, 'applicants_list'])->name('admin.applicants_list');




//user
Route::get('/apply-job-form/{id}', [JobSeekerController::class, 'job_form'])->name('user.job-form');
Route::post('/submit-job-apply', [JobSeekerController::class, 'apply_job'])->name('user.apply_job');
Route::get('/search-job', [JobSeekerController::class, 'search_job'])->name('user.search_job');
Route::get('/view-job-detail-user/{id}', [JobSeekerController::class, 'user_view_job_detail'])->name('user.user_view_job_detail');




require __DIR__ . '/auth.php';
