<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\SubjectController;
use App\Http\Controllers\API\GradeController;

Route::group(['prefix' => 'students'], function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/{student}', [StudentController::class, 'show']);
    Route::post('/', [StudentController::class, 'store']);
    Route::put('/{student}', [StudentController::class, 'update']);
    Route::delete('/{student}', [StudentController::class, 'destroy']);
});

Route::group(['prefix' => 'subjects'], function () {
    Route::get('/', [SubjectController::class, 'index']);
    Route::get('/{subject}', [SubjectController::class, 'show']);
    Route::post('/', [SubjectController::class, 'store']);
    Route::put('/{subject}', [SubjectController::class, 'update']);
    Route::delete('/{subject}', [SubjectController::class, 'destroy']);
});

Route::group(['prefix' => 'grades'], function () {
    Route::get('/', [GradeController::class, 'index']);
    Route::get('/{grade}', [GradeController::class, 'show']);
    Route::post('/', [GradeController::class, 'store']);
    Route::put('/{grade}', [GradeController::class, 'update']);
    Route::delete('/{grade}', [GradeController::class, 'destroy']);
});

