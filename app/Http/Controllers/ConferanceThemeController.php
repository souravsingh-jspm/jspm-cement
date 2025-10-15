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

        $cfpid = ConferanceTheme::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $cfpid], 201);
    }

    public function show(ConferanceTheme $conferanceTheme)
    {
       return response()->json($conferanceTheme);
    }

    public function edit(ConferanceTheme $conferanceTheme)
    {
        return response()->json($conferanceTheme);
    }

    public function update(Request $request, ConferanceTheme $conferanceTheme)
    {
        $validated = $request->validate([
            'ct_title' => 'sometimes|required|string',
            'ct_short_description' => 'sometimes|required|string',
        ]);

        $conferanceTheme->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $conferanceTheme], 200);
    }

    public function destroy(ConferanceTheme $conferanceTheme)
    {
        $conferanceTheme->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}