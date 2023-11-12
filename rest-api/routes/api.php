<?php
use App\Http\Controllers\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
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

Route::get('/students/{id}', [StudentController::class, 'show']);


#bungkus route dengan middleware sanctum
Route::middleware('auth:sanctum')->group(function () {
    # Method GET, route /students
    Route::get('/students', [StudentController::class, 'index']);
    # Create student
    Route::post('/students', [StudentController::class, 'store']);
    # Update student
    Route::put('/students/{id}', [StudentController::class, 'update']);
    # Delete student
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);
});

# untuk register dan login pake auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
