<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KeyNoteSpeaker; 

class KeyNoteSpeakerController extends Controller
{
    public function index(){
        return response()->json(KeyNoteSpeaker::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kns_image' => 'sometimes|required|string',
            'kns_name' => 'sometimes|required|string',
            'kns_designation' => 'sometimes|required|string',
        ]);

        $keynotespeaker = KeyNoteSpeaker::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $keynotespeaker], 201);
    }

    public function show(KeyNoteSpeaker $keynotespeaker)
    {
       return response()->json($keynotespeaker);
    }

    public function edit(KeyNoteSpeaker $keynotespeaker)
    {
        return response()->json($keynotespeaker);
    }

    public function update(Request $request, KeyNoteSpeaker $keynotespeaker)

    {
    $validated = $request->validate([
        'kns_image' => 'sometimes|required|string',
        'kns_name' => 'sometimes|required|string',
        'kns_designation' => 'sometimes|required|string',
    ]);

    $keynotespeaker->update($validated);

    return response()->json([
        'message' => 'Updated successfully',
        'data' => $keynotespeaker
    ], 200);
    }

    public function destroy(KeyNoteSpeaker $keynotespeaker)
    {
        $keynotespeaker->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }}