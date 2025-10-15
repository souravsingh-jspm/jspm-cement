<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage; 

class HomePageController extends Controller
{
    public function index(){
        return response()->json(HomePage::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'home_page_title' => 'sometimes|required|string',
            'about_jspm_group' => 'sometimes|required|string',
            'about_jspm_university_pune' => 'sometimes|required|string',
            'about_soces' => 'sometimes|required|string',
        ]);

        $cfpid = HomePage::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $cfpid], 201);
    }

    public function show(HomePage $HomePage)
    {
       return response()->json($HomePage);
    }

    public function edit(HomePage $HomePage)
    {
        return response()->json($HomePage);
    }

    public function update(Request $request, HomePage $HomePage)
    {
        $validated = $request->validate([
            'home_page_title' => 'sometimes|required|string',
            'about_jspm_group' => 'sometimes|required|string',
            'about_jspm_university_pune' => 'sometimes|required|string',
            'about_soces' => 'sometimes|required|string',
        ]);

        $HomePage->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $HomePage], 200);
    }

    public function destroy(HomePage $HomePage)
    {
        $HomePage->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}