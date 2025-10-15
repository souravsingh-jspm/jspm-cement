<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage; 

class HomePageController extends Controller
{

    public function index()
{
    $tasks = HomePage::all();
    return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        HomePage::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(HomePage $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, HomePage $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(HomePage $task)
{
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
}}