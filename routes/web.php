<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\NewsroomController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\RegisteredAdminController;

// user section
Route::get('/', function () {
    return view('users.index');
});

Route::get('/company', function () {
    return view('users.company');
});

Route::get('/newsroom', [NewsroomController::class, 'index']);
Route::get('/newsroom/{category:slug}', [NewsroomController::class, 'filter']);
Route::get('/categories/{newsroom:slug}', [NewsroomController::class, 'show']);
Route::get('/newsroom/{newroom:slug}', [NewsroomController::class, 'show']);

Route::get('/contact', [EmailController::class, 'index']);
Route::post('/kirim-email', [EmailController::class, 'kirim'])->name('kirim.email');

Route::get('/careers', [ApplicantController::class, 'index']);
Route::get('/careers/lamar', [ApplicantController::class, 'create1']);
Route::get('/careers/{job:slug}/apply', [ApplicantController::class, 'create']);
Route::post('/careers/{job:slug}/apply', [ApplicantController::class, 'store']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/category/{name}', [ProductController::class, 'showByCategory'])->name('products.category');
// Route::get('/products/category/{name}', [ProductController::class, 'filterByCategory'])->name('products.category');
Route::get('/products/{product:slug}', [ProductController::class, 'show']);
Route::post('/products/{product}', [ProductController::class, 'store']);
Route::post('/products/{product}/request-a-quotation', [ProductController::class, 'kirim']);



Route::get('/login', [SessionController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/register', [RegisteredAdminController::class, 'index'])->middleware('superadmin');
Route::post('/register', [RegisteredAdminController::class, 'store']);

// admin section
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('admin.index');
});
    // KHUSUS ADMIN PRODUCT SAJA Ya Jangan Dirubah
    Route::middleware(['auth', 'can:admin_product'])->group(function () {
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{product:slug}/edit', [ProductController::class, 'edit']);
    Route::put('/products/{product:slug}/edit', [ProductController::class, 'update']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::get('/products/{product:slug}', [ProductController::class, 'show']);
    Route::delete('/products/{product:slug}', [ProductController::class, 'destroy']);
});
    // KHUSUS ADMIN NEWSROOM SAJA
    Route::middleware(['auth', 'can:admin_newsroom'])->group(function () {
    Route::get('/newsroom/checkSlug', [NewsroomController::class, 'checkSlug']);
    Route::get('/newsroom', [NewsroomController::class, 'index']);
    Route::get('/newsroom/create', [NewsroomController::class, 'create']);
    Route::post('/newsroom', [NewsroomController::class, 'store']);
    Route::get('/newsroom/{newsroom:slug}', [NewsroomController::class, 'show']);
    Route::delete('/newsroom/{newsroom:slug}', [NewsroomController::class, 'destroy'])->name('newsroom.destroy');
    Route::get('/newsroom/{newsroom:slug}/edit', [NewsroomController::class, 'edit']);
    Route::put('/newsroom/{newsroom:slug}/update', [NewsroomController::class, 'update']);
});
    // KHUSUS ADMIN CAREER SAJA
    Route::middleware(['auth', 'can:admin_career'])->group(function () {
    Route::get('/job/checkSlug', [JobController::class, 'checkSlug']);
    Route::get('/job', [JobController::class, 'index']);
    Route::get('/job/create', [JobController::class, 'create']);
    Route::get('/job/applicantshow/{applicant}', [JobController::class, 'DetailApplicant'])->name('job.applicants');
    Route::post('/job/applicantshow/{applicant}/status', [JobController::class, 'ubahStatus'])->name('job.ubahStatus');
    Route::get('/job/{id}', [ApplicantController::class, 'index'])->name('nama.route.admin.job');
    Route::get('/job/applicantshow/{applicant}/mark-print', [JobController::class, 'markPrint'])->name('job.markPrint');
    Route::get('/job/applicantshow/{applicant}/print', [JobController::class, 'print'])->name('job.print');
    Route::post('/job/applicantshow/{id}/mark-read', [JobController::class, 'markReadAndShowPost']);
    Route::post('/job', [JobController::class, 'store']);
    Route::get('/job/{job:slug}/edit', [JobController::class, 'edit']);
    Route::put('/job/{job:slug}/update', [JobController::class, 'update']);
    Route::delete('/job/{job:slug}', [JobController::class, 'destroy'])->name('job.destroy');
    Route::get('/jobs/filter', [JobController::class, 'filter'])->name('jobs.filter');
    Route::get('/job/{job}/show', [JobController::class, 'showDataApplicants']);
   });
});