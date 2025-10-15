<?php

namespace App\Http\Controllers;
use App\Models\ConferanceTheme; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferanceThemeController extends Controller
{
    public function index()
{
    $tasks = ConferanceTheme::all();
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

        ConferanceTheme::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(ConferanceTheme $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, ConferanceTheme $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(ConferanceTheme $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}