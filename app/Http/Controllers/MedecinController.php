<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Medecin::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Medecin $medecin)
    {
        Medecin::create($medecin->post());
        return response()->json([
            'message' => 'Medecin created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Medecin $medecin)
    {
        return response()->json([
            'medecin' => $medecin
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Medecin $medecin)
    {
        $medecin->update($medecin->post());
        return response()->json([
            'message' => 'Medecin updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medecin $medecin)
    {
        $medecin->delete();
        return response()->json([
            'message' => 'Medecin deleted successfully'
        ]);
    }
}