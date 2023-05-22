<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TutorialController;
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

Route::get('/welcome', [MainController::class, 'welcome'])->name('welcome');


// profile

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard

Route::get('/dashboard', [MainController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/course/course', [MainController::class, 'course'])->middleware(['auth', 'verified'])->name('course.course');
Route::get('/available', [MainController::class, 'available'])->name('available');
Route::get('/single/{course}', [MainController::class, 'saw'])->name('single');
// Course Single

// Route::get('/single/{id}', [SingleController::class, 'show'])->middleware(['auth', 'verified'])->name('single');

// Logout

Route::get('/logout', [MainController::class, 'index'])->name('index');

// course

Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/course', [CourseController::class, 'store'])->name('course.store');
Route::get('/course/coursesingle/{course}', [CourseController::class, 'single'])->name('course.coursesingle');
Route::get('/course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::patch('course/{course}/update', [CourseController::class, 'update'])->name('course.update');
Route::delete('course/{course}/delete', [CourseController::class, 'destroy'])->name('course.destroy');

// Note
Route::post('/note', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/note', [NoteController::class, 'create'])->name('note.note');
Route::get('/note', [NoteController::class, 'view'])->name('note.index');
Route::get('note/{note}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::patch('note/{note}/update', [NoteController::class, 'update'])->name('note.update');
Route::delete('note/{note}/delete', [NoteController::class, 'destroy'])->name('note.destroy');

// Tutorials

Route::post('/tutorial', [TutorialController::class, 'store'])->name('tutorial.store');
Route::get('/tutorial', [TutorialController::class, 'view'])->name('tutorial.index');
Route::get('/tutorial/tutorial', [TutorialController::class, 'create'])->name('tutorial.tutorial');
Route::get('tutorial/{tutorial}/edit', [TutorialController::class, 'edit'])->name('tutorial.edit');
Route::patch('tutorial/{tutorial}/update', [TutorialController::class, 'update'])->name('tutorial.update');
Route::delete('tutorial/{tutorial}/delete', [TutorialController::class, 'destroy'])->name('tutorial.destroy');


require __DIR__.'/auth.php';
