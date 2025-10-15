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

        $homepage = HomePage::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $homepage], 201);
    }

    public function show(HomePage $homepage)
    {
       return response()->json($homepage);
    }

    public function edit(HomePage $homepage)
    {
        return response()->json($homepage);
    }

    public function update(Request $request, HomePage $homepage)
    {
        $validated = $request->validate([
            'home_page_title' => 'sometimes|required|string',
            'about_jspm_group' => 'sometimes|required|string',
            'about_jspm_university_pune' => 'sometimes|required|string',
            'about_soces' => 'sometimes|required|string',
        ]);

        $homepage->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $homepage], 200);
    }

    public function destroy(HomePage $homepage)
    {
        $homepage->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}