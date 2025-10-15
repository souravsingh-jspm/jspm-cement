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

        $cfpid = KeyNoteSpeaker::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $cfpid], 201);
    }

    public function show(KeyNoteSpeaker $KeyNoteSpeaker)
    {
       return response()->json($KeyNoteSpeaker);
    }

    public function edit(KeyNoteSpeaker $KeyNoteSpeaker)
    {
        return response()->json($KeyNoteSpeaker);
    }

    public function update(Request $request, KeyNoteSpeaker $KeyNoteSpeaker)
    {
        $validated = $request->validate([
            'kns_image' => 'sometimes|required|string',
            'kns_name' => 'sometimes|required|string',
            'kns_designation' => 'sometimes|required|string',
        ]);

        $KeyNoteSpeaker->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $KeyNoteSpeaker], 200);
    }

    public function destroy(KeyNoteSpeaker $KeyNoteSpeaker)
    {
        $KeyNoteSpeaker->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }}