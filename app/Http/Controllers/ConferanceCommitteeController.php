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

        $cfpid = ConferanceCommittee::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $cfpid], 201);
    }

    public function show(ConferanceCommittee $ConferanceCommittee)
    {
       return response()->json($ConferanceCommittee);
    }

    public function edit(ConferanceCommittee $ConferanceCommittee)
    {
        return response()->json($ConferanceCommittee);
    }

    public function update(Request $request, ConferanceCommittee $ConferanceCommittee)
    {
        $validated = $request->validate([
            'role' => 'sometimes|required|string',
            'cc_image' => 'sometimes|required|string',
            'cc_name' => 'sometimes|required|string',
            'cc_designation' => 'sometimes|required|string',
        ]);

        $ConferanceCommittee->update($validated);

        return response()->json(['message' => 'Updated successfully', 'data' => $ConferanceCommittee], 200);
    }

    public function destroy(ConferanceCommittee $ConferanceCommittee)
    {
        $ConferanceCommittee->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}