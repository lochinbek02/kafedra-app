<?php

use App\Http\Controllers\PostApiController;
use App\Http\Controllers\YuklamaApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('posts',PostApiController::class);




//
// Route::get('request/about',[PostApiController::class,'about'])->name('request.about');

Route::get('/request/main',[PostApiController::class, 'main'])->name('request.main');
// Route::get('/request/save',[PostApiController::class, 'save'])->name('request.save');
Route::post('/request/stores',[PostApiController::class, 'stores'])->name('request.stores');
//kafedra o'qituvchilari ro'yxati
Route::get('/request/sciense',[PostApiController::class, 'sciense'])->name('request.sciense');
// Route::get('/request/sciense_create',[PostApiController::class, 'sciense_create'])->name('request.sciense_create');
Route::post('/request/sciense_save',[PostApiController::class, 'sciense_save'])->name('request.sciense_save');
Route::get('/request/{id}',[PostApiController::class, 'sciense_show'])->name('request.sciense_show');
// Route::get('/request/{idd}',[PostApiController::class, 'sciense_update'])->name('request.sciense_update');
Route::put('/request/{id}/sciense_update', [PostApiController::class, 'sciense_update']) ->name('request.sciense_update');
Route::get('/request/{id}/sciense_edit',[PostApiController::class, 'sciense_edit'])->name('request.sciense_edit');
Route::delete('/request/{id}/science_destroy',[PostApiController::class,'sciense_destroy'])->name('request.sciense_destroy');
//kafedra o'rituvchilari malumotlari
Route::get('/home/teacher',[PostApiController::class, 'teacher'])->name('home.teacher');
// Route::get('/home/teacher_create',[PostApiController::class, 'teacher_create'])->name('home.teacher_create');
Route::post('/home/teacher_save',[PostApiController::class, 'teacher_save'])->name('home.teacher_save');
Route::get('/home/{id}',[PostApiController::class, 'teacher_show'])->name('home.teacher_show');
// Route::get('/home/{idd}',[PostApiController::class, 'teacher_update'])->name('home.teacher_update');
Route::put('/home/{id}/teacher_update', [PostApiController::class, 'teacher_update']) ->name('home.teacher_update');
Route::get('/home/{id}/teacher_edit',[PostApiController::class, 'teacher_edit'])->name('home.teacher_edit');
Route::delete('/home/{id}/teacher_destroy',[PostApiController::class,'teacher_destroy'])->name('home.teacher_destroy');
//
//yuklama
Route::get('yuklama/firstinsert',[YuklamaApiController::class,'firstinsert'])->name('yuklama.firstinsert');
Route::get('yuklama/thirdinsert',[YuklamaApiController::class,'thirdinsert'])->name('yuklama.thirdinsert');

//

