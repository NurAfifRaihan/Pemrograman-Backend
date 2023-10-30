<?php
use App\Http\Controllers\AnimalController;
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

// Route animals
Route::get('/animals', [AnimalController::class, 'index']);
Route::put('/animals/{id}', [AnimalController::class, 'update']);
Route::post('/animals', [AnimalController::class, 'store']);
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

# Route students
# Method GET
Route::get('/students', [StudentController::class, 'index']);

# Method POST
Route::post('/students', [StudentController::class, 'store']);


