<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Consultation::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Consultation::create($request->post());

        return response()->json([
            'message' => 'Consultation created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consultation)
    {
        return response()->json([
            'consultation' => $consultation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultation $consultation)
    {
        $consultation->update($request->post());

        return response()->json([
            'message' => 'Consultation updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consultation)
    {
        $consultation->delete();
        return response()->json([
            'message' => 'Consultation deleted successfully'
        ]);
    }
}