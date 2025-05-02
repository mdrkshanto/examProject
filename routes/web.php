<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('post.login');
Route::middleware('auth')->as('exam.')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [ExamController::class, 'index'])->name('list');
    Route::get('exam-detail/{id}', [ExamController::class, 'detail'])->name('detail');
    Route::get('exam-start/{exam}/{question}', [ExamController::class, 'start'])->name('start');
    Route::post('exam-submit/{question}',[ExamController::class,'submit'])->name('submit');
    Route::get('exam-result/{exam}',[ExamController::class,'result'])->name('result');
});
