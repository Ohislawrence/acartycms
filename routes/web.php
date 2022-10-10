<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogcatController;
use App\Http\Controllers\FrontPages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SeriviceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursecatController;




use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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


//home pages
Route::get('/', [FrontPages\HomeController::class, 'index'])->name('home.page');
Route::get('/services', [FrontPages\HomeController::class, 'services'])->name('service.page');
Route::get('/services/{slug}', [FrontPages\HomeController::class, 'servicesdetails'])->name('servicedetails.page');
Route::get('/portfolio', [FrontPages\HomeController::class, 'portfolio'])->name('portfolio.page');
Route::get('/blog', [FrontPages\HomeController::class, 'blogs'])->name('blogs.page');
Route::get('/blog/{slug}', [FrontPages\HomeController::class, 'blogsingle'])->name('blogsingle.page');
Route::get('/learn', [FrontPages\HomeController::class, 'learn'])->name('learn.page');
Route::get('/learn/{slug}', [FrontPages\HomeController::class, 'learnsingle'])->name('learnsingle.page');
Route::get('/sell', [FrontPages\HomeController::class, 'sell'])->name('sell.page');
Route::get('/servicerequest', [FrontPages\HomeController::class, 'servicerequest'])->name('servicerequest.page');
Route::post('/servicerequest/post', [FrontPages\HomeController::class, 'servicerequestpost'])->name('servicerequestpost.page');
Route::get('/service/thankyou', [FrontPages\HomeController::class, 'thankyou'])->name('thankyou.page');



//app
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('app')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('cms/blogs', BlogController::class);
    Route::resource('cms/blogcat', BlogcatController::class);
    Route::resource('services', SeriviceController::class);
    Route::resource('course', CourseController::class);
    Route::resource('coursecat', CoursecatController::class);

    //service request
    Route::get('service-request', [ServiceRequestController::class, 'show'])->name('show.request');
    Route::get('service-request/{id}/details', [ServiceRequestController::class, 'detail'])->name('detail.request');
    Route::put('service-request/{id}/details/update', [ServiceRequestController::class, 'update'])->name('update.request');


});
