<?php

namespace App\Http\Controllers;

use App\Models\ConferanceCommittee; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferanceCommitteeController extends Controller
{
    public function index(){
        return response()->json(ConferanceCommittee::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'role' => 'sometimes|required|string',
            'cc_image' => 'sometimes|required|string',
            'cc_name' => 'sometimes|required|string',
            'cc_designation' => 'sometimes|required|string',
        ]);

        $ConferanceCommittee = ConferanceCommittee::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $ConferanceCommittee], 201);
    }

    public function show(ConferanceCommittee $conferancecommittee)
    {
       return response()->json($conferancecommittee);
    }

    public function edit(ConferanceCommittee $conferancecommittee)
    {
        return response()->json($conferancecommittee);
    }

    public function update(Request $request, ConferanceCommittee $conferancecommittee)
    {
        $validated = $request->validate([
            'role' => 'sometimes|required|string',
            'cc_image' => 'sometimes|required|string',
            'cc_name' => 'sometimes|required|string',
            'cc_designation' => 'sometimes|required|string',
        ]);

        $conferancecommittee->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $conferancecommittee], 200);
    }

    public function destroy(ConferanceCommittee $conferancecommittee)
    {
        $conferancecommittee->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}