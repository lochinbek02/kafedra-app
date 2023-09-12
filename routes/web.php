<?php

use App\Http\Controllers\KafedraController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
    
// });
Route::get('/',[KafedraController::class,'index']);  
Route::get('request/about',[KafedraController::class,'about'])->name('request.about');

Route::get('/request/main',[KafedraController::class, 'main'])->name('request.main');
// Route::get('/request/save',[KafedraController::class, 'save'])->name('request.save');
// Route::post('/request/stores',[KafedraController::class, 'stores'])->name('request.stores');
//kafedra o'qituvchilari ro'yxati
// Route::get('/request/sciense',[KafedraController::class, 'sciense'])->name('request.sciense');
// Route::get('/request/sciense_create',[KafedraController::class, 'sciense_create'])->name('request.sciense_create');
// Route::post('/request/sciense_save',[KafedraController::class, 'sciense_save'])->name('request.sciense_save');
// Route::get('/request/{id}',[KafedraController::class, 'sciense_show'])->name('request.sciense_show');
// // Route::get('/request/{idd}',[KafedraController::class, 'sciense_update'])->name('request.sciense_update');
// Route::put('/request/{id}/sciense_update', [KafedraController::class, 'sciense_update']) ->name('request.sciense_update');
// Route::get('/request/{id}/sciense_edit',[KafedraController::class, 'sciense_edit'])->name('request.sciense_edit');
// Route::delete('/request/{id}/science_destroy',[KafedraController::class,'sciense_destroy'])->name('request.sciense_destroy');
// //kafedra o'rituvchilari malumotlari
// Route::get('/home/teacher',[KafedraController::class, 'teacher'])->name('home.teacher');
// Route::get('/home/teacher_create',[KafedraController::class, 'teacher_create'])->name('home.teacher_create');
// Route::post('/home/teacher_save',[KafedraController::class, 'teacher_save'])->name('home.teacher_save');
// Route::get('/home/{id}',[KafedraController::class, 'teacher_show'])->name('home.teacher_show');
// // Route::get('/home/{idd}',[KafedraController::class, 'teacher_update'])->name('home.teacher_update');
// Route::put('/home/{id}/teacher_update', [KafedraController::class, 'teacher_update']) ->name('home.teacher_update');
// Route::get('/home/{id}/teacher_edit',[KafedraController::class, 'teacher_edit'])->name('home.teacher_edit');
// Route::delete('/home/{id}/teacher_destroy',[KafedraController::class,'teacher_destroy'])->name('home.teacher_destroy');
// //
// //yuklama
// Route::get('/yuklama',[KafedraController::class,'yuklama'])->name('yuklama');
// //

// //News
// Route::get('/news',[KafedraController::class,'news'])->name('news');
// Route::post('/news/create',[KafedraController::class,'newsCreate'])->name('news.create');
// Route::get('news/{id}/image', [KafedraController::class,'showImage'])->name('newss.image');

// //
Route::resource('companies',KafedraController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::middleware(['check-auth'])->group(function () {
    // Your protected routes go here...
   
    Route::get('/request/save',[KafedraController::class, 'save'])->name('request.save')    ;
    Route::post('/request/stores',[KafedraController::class, 'stores'])->name('request.stores');
    Route::get('/request/sciense',[KafedraController::class, 'sciense'])->name('request.sciense');
    Route::get('/request/sciense_create',[KafedraController::class, 'sciense_create'])->name('request.sciense_create');
    Route::post('/request/sciense_save',[KafedraController::class, 'sciense_save'])->name('request.sciense_save');
    Route::get('/request/{id}',[KafedraController::class, 'sciense_show'])->name('request.sciense_show');
    // Route::get('/request/{idd}',[KafedraController::class, 'sciense_update'])->name('request.sciense_update');
    Route::put('/request/{id}/sciense_update', [KafedraController::class, 'sciense_update']) ->name('request.sciense_update');
    Route::get('/request/{id}/sciense_edit',[KafedraController::class, 'sciense_edit'])->name('request.sciense_edit');
    Route::delete('/request/{id}/science_destroy',[KafedraController::class,'sciense_destroy'])->name('request.sciense_destroy');
    //kafedra o'rituvchilari malumotlari
    Route::get('/home/teacher',[KafedraController::class, 'teacher'])->name('home.teacher');
    Route::get('/home/teacher_create',[KafedraController::class, 'teacher_create'])->name('home.teacher_create');
    Route::post('/home/teacher_save',[KafedraController::class, 'teacher_save'])->name('home.teacher_save');
    Route::get('/home/{id}',[KafedraController::class, 'teacher_show'])->name('home.teacher_show');
    // Route::get('/home/{idd}',[KafedraController::class, 'teacher_update'])->name('home.teacher_update');
    Route::put('/home/{id}/teacher_update', [KafedraController::class, 'teacher_update']) ->name('home.teacher_update');
    Route::get('/home/{id}/teacher_edit',[KafedraController::class, 'teacher_edit'])->name('home.teacher_edit');
    Route::delete('/home/{id}/teacher_destroy',[KafedraController::class,'teacher_destroy'])->name('home.teacher_destroy');
    //
    //yuklama
    Route::get('/yuklama',[KafedraController::class,'yuklama'])->name('yuklama');
    //

    //News
    Route::get('/news',[KafedraController::class,'news'])->name('news');
    Route::post('/news/create',[KafedraController::class,'newsCreate'])->name('news.create');
    Route::get('news/{id}/image', [KafedraController::class,'showImage'])->name('newss.image');

    //
   
});

