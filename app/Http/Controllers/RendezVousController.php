<?php

namespace App\Http\Controllers;

use App\Models\Rendez_Vous;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class Rendez_VousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Rendez_Vous::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rendez_Vous::create($request->post());

        return response()->json([
            'message' => 'Rendez-vous created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rendez_Vous $Rendez_Vous)
    {
        return response()->json([
            'Rendez_Vous' => $Rendez_Vous
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rendez_Vous $Rendez_Vous)
    {
        $Rendez_Vous->update($request->post());

        return response()->json([
            'message' => 'Rendez-vous updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rendez_Vous $Rendez_Vous)
    {
        $Rendez_Vous->delete();

        return response()->json([
            'message' => 'Rendez-vous deleted successfully'
        ]);
    }
}