<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImportantDates; 

class ImportantDatesController extends Controller
{

    public function index(){
        return response()->json(ImportantDates::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_title' => 'sometimes|required|string',
            'id_date' => 'sometimes|required|date',
            'id_description' => 'sometimes|required|string',
        ]);

        $cfpid = ImportantDates::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $cfpid], 201);
    }

    public function show(ImportantDates $ImportantDates)
    {
       return response()->json($ImportantDates);
    }

    public function edit(ImportantDates $ImportantDates)
    {
        return response()->json($ImportantDates);
    }

    public function update(Request $request, ImportantDates $ImportantDates)
    {
        $validated = $request->validate([
            'id_title' => 'sometimes|required|string',
            'id_date' => 'sometimes|required|date',
            'id_description' => 'sometimes|required|string',
        ]);

        $ImportantDates->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $ImportantDates], 200);
    }

    public function destroy(ImportantDates $ImportantDates)
    {
        $ImportantDates->delete();
        return response()->json(['message' => 'Deleted successfully']);
    } 
}