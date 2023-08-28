<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Grade1Controller;
use App\Http\Controllers\PlaygroundController;
use App\Http\Controllers\Pp1Contoller;

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
Route::resources([
    'Fee'=>FeeController::class,
     'pages'=>PagesController::class,
     'grade'=>GradeController::class,
     'grade1'=>Grade1Controller::class,
     'Playground'=>PlaygroundController::class,
     'grade1'=>Pp1Contoller::class,
    

    ]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::middleware(['ensure.authenticated'])->group(function () {
//     // Add your protected routes here
//     Route::get('/dashboard', function () {
//         // Dashboard route accessible to authenticated users
//         return view('dashboard');
//     });
// });
Route::get('/fee/{id}/print', 'FeeController@print')->name('fee.print');
Route::get('/fees/{class_Id}', 'FeeController@showFeesByClassId');
// web.php or routes.php

Route::get('php/classid', function () {
    return view('fees');
});

