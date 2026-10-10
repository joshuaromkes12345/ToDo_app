<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return view('todo.index', compact('tasks'));
    }

    public function create() {
        return view('todo.create');
    }

    public function store(Request $request) {
        $validated_data = $request->validate([
            'title' => 'required|string||max:255',
            'description' => 'required|string|max:255',
        ]);

        $validated_data['status'] = 'todo';

        Task::create($validated_data);

        return redirect()->route('todo.home');
    }

    public function view_content($id) {
        $task = Task::findOrFail($id);

        return view('todo.show', compact('task'));
    }
}
