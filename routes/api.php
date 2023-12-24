<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\Rendez_VousController;
use App\Http\Controllers\PathologieController;

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

// GET Routes
Route::get('patients', [PatientController::class, 'index']);
Route::get('patients/{patient}', [PatientController::class, 'show']);
// Add more GET routes for PatientController as needed

Route::get('medecins', [MedecinController::class, 'index']);
Route::get('medecins/{medecin}', [MedecinController::class, 'show']);
// Add more GET routes for MedecinController as needed

Route::get('consultations', [ConsultationController::class, 'index']);
Route::get('consultations/{consultation}', [ConsultationController::class, 'show']);
// Add more GET routes for ConsultationController as needed

Route::get('ordonnances', [OrdonnanceController::class, 'index']);
Route::get('ordonnances/{ordonnance}', [OrdonnanceController::class, 'show']);
// Add more GET routes for OrdonnanceController as needed

Route::get('rendez_vous', [Rendez_VousController::class, 'index']);
Route::get('rendez_vous/{rendezVous}', [Rendez_VousController::class, 'show']);
// Add more GET routes for RendezVousController as needed

Route::get('pathologies', [PathologieController::class, 'index']);
Route::get('pathologies/{pathologie}', [PathologieController::class, 'show']);
// Add more GET routes for PathologieController as needed

// POST Routes
Route::post('patients', [PatientController::class, 'store']);
Route::post('medecins', [MedecinController::class, 'store']);
Route::post('consultations', [ConsultationController::class, 'store']);
Route::post('ordonnances', [OrdonnanceController::class, 'store']);
Route::post('rendez_vous', [Rendez_VousController::class, 'store']);
Route::post('pathologies', [PathologieController::class, 'store']);

// PUT Routes
Route::put('patients/{patient}', [PatientController::class, 'update']);
Route::put('medecins/{medecin}', [MedecinController::class, 'update']);
Route::put('consultations/{consultation}', [ConsultationController::class, 'update']);
Route::put('ordonnances/{ordonnance}', [OrdonnanceController::class, 'update']);
Route::put('rendez_vous/{rendezVous}', [Rendez_VousController::class, 'update']);
Route::put('pathologies/{pathologie}', [PathologieController::class, 'update']);

// DELETE Routes
Route::delete('patients/{patient}', [PatientController::class, 'destroy']);
Route::delete('medecins/{medecin}', [MedecinController::class, 'destroy']);
Route::delete('consultations/{consultation}', [ConsultationController::class, 'destroy']);
Route::delete('ordonnances/{ordonnance}', [OrdonnanceController::class, 'destroy']);
Route::delete('rendez_vous/{rendezVous}', [Rendez_VousController::class, 'destroy']);
Route::delete('pathologies/{pathologie}', [PathologieController::class, 'destroy']);