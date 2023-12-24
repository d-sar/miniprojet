<?php

namespace App\Http\Controllers;

use App\Models\Pathologie;
use Illuminate\Http\Request;

class PathologieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pathologie::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pathologie::create($request->post());

        return response()->json([
            'message' => 'Pathologie created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pathologie $pathologie)
    {
        return response()->json([
            'pathologie' => $pathologie
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pathologie $pathologie)
    {
        $pathologie->update($request->post());

        return response()->json([
            'message' => 'Pathologie updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pathologie $pathologie)
    {
        $pathologie->delete();

        return response()->json([
            'message' => 'Pathologie deleted successfully'
        ]);
    }
}