<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index(){
        return response()->json(user::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'email' => 'sometimes|required|string',
            'password' => 'sometimes|required|string',
        ]);

        $user = user::create($validated);

        return response()->json(['message' => 'Created successfully', 'data' => $user], 201);
    }

    public function show(user $user)
    {
       return response()->json($user);
    }

    public function edit(user $user)
    {
        return response()->json($user);
    }

    public function update(Request $request, user $user)

    {
    $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'email' => 'sometimes|required|string',
            'password' => 'sometimes|required|string',
    ]);

    $user->update($validated);

    return response()->json([
        'message' => 'Updated successfully',
        'data' => $user
    ], 200);
    }

    public function destroy(user $user)
    {
        $user->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }

    public function login(Request $request){
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $user = user::where('email', $credentials['email'])->first();

    if (! $user || $user->password !== $credentials['password']) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    return response()->json([
        'message' => 'Login successful',
        'user' => $user,
        // 'token' => base64_encode($user->email . '|' . now()) // fake token example
    ]);
}

}