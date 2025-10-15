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

        $importantdate = ImportantDates::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $importantdate], 201);
    }

    public function show(ImportantDates $importantdate)
    {
       return response()->json($importantdate);
    }

    public function edit(ImportantDates $importantdate)
    {
        return response()->json($importantdate);
    }

    public function update(Request $request, ImportantDates $importantdate)
    {
        $validated = $request->validate([
            'id_title' => 'sometimes|required|string',
            'id_date' => 'sometimes|required|date',
            'id_description' => 'sometimes|required|string',
        ]);

        $importantdate->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $importantdate], 200);
    }

    public function destroy(ImportantDates $importantdate)
    {
        $importantdate->delete();
        return response()->json(['message' => 'Deleted successfully']);
    } 
}