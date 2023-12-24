<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Patient::select('id', 'cin',  'nom', 'prenom', 'num_tel', 'genre', 'date_naissance')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Patient $patient)
    {
        Patient::create($patient->post());
        return response()->json([
            'message' => 'Patient created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return response()->json([
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->post());
        return response()->json([
            'message' => 'Patient updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->json([
            'message' => 'Patient deleted successfully'
        ]);
    }

    /**
     * Check if patient already exists
     */
    public function patientExists(Request $request){
        $request->validate([
            'cin' => 'required'
        ]);
        try{
            $patient = Patient::where('cin',$request->cin)->firstorFail();
            return response()->json([
                'patient' => $patient->toArray()
            ]);
        }catch (ModelNotFoundException $e){
            return response()->json([
                'message' => 'null'
            ]);
        }
    }
}