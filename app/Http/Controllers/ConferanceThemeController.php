<?php

namespace App\Http\Controllers;
use App\Models\ConferanceTheme; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferanceThemeController extends Controller
{
    public function index(){
        return response()->json(ConferanceTheme::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ct_title' => 'sometimes|required|string',
            'ct_short_description' => 'sometimes|required|string',
        ]);

        $conferanceTheme = ConferanceTheme::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $conferanceTheme], 201);
    }

    public function show(ConferanceTheme $conferancetheme)
    {
       return response()->json($conferancetheme);
    }

    public function edit(ConferanceTheme $conferancetheme)
    {
        return response()->json($conferancetheme);
    }

    public function update(Request $request, ConferanceTheme $conferancetheme)
    {
        $validated = $request->validate([
            'ct_title' => 'sometimes|required|string',
            'ct_short_description' => 'sometimes|required|string',
        ]);

        $conferancetheme->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $conferancetheme], 200);
    }

    public function destroy(ConferanceTheme $conferancetheme)
    {
        $conferancetheme->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}