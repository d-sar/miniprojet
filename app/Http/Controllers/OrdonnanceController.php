<?php

namespace App\Http\Controllers;

use App\Models\Ordonnance;
use Illuminate\Http\Request;

class OrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ordonnance::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ordonnance::create($request->post());

        return response()->json([
            'message' => 'Ordonnance created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordonnance $ordonnance)
    {
        return response()->json([
            'ordonnance' => $ordonnance
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ordonnance $ordonnance)
    {
        $ordonnance->update($request->all());

        return response()->json([
            'message' => 'Ordonnance updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordonnance $ordonnance)
    {
        $ordonnance->delete();

        return response()->json([
            'message' => 'Ordonnance deleted successfully'
        ]);
    }
}