<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\JsonException;

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
            'notes' => 'nullable|string|max:750',
            'status' => 'required'
        ]);

        Task::create($validated_data);

        return redirect()->route('todo.home');
    }

    public function view_content($id) {
        $task = Task::findOrFail($id);

        return view('todo.show', compact('task'));
    }

    public function destroy(Task $task) {
        $task->delete();
        return redirect()->route('todo.home');
    }

    public function update($id) {
        $task = Task::findOrFail($id);

        return view('todo.update', compact('task'));
    }
    
    public function store_update(Request $request, $id) {
        $validated_data = $request->validate([
            'title' => 'required|string||max:255',
            'description' => 'required|string|max:255',
            'notes' => 'nullable|string|max:750',
            'status' => 'required'
        ]);

        try{
            $task = Task::findOrFail($id);
            $task->update($validated_data);
        } catch(ModelNotFoundException $e) {
            return response()->json(['error' => 'Product not found'], 404);
        } finally {
            return redirect()->route('todo.home');
        }
    }

    public function db_export() {
        $tasks = Task::all();
        $tasks_json = json_encode(
            $tasks,
            JSON_PRETTY_PRINT
        );
        return response($tasks_json, 200, [
            'Content-Type' => 'application/json',
            'Content-Disposition' => 'atachment; filename="tasks.json"',
        ]);
    }

    public function import(): View {
        return view('todo.import');
    }

    public function store_import(Request $request) {
        $request->validate([
            'json_file' => 'required|file|mimes:json',
            ]);
        
        $contents = $request->file('json_file')->get();

        try {
            $data = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            return back()->withErrors(['json_file' => 'Fout in Json']);
        }

        foreach ($data as $task) {
            Task::create([
                'title' => $task["title"],
                'description' => $task["description"],
                'status' => $task["status"],
                'notes' => $task["status"],
            ]);
        }

        return redirect()->route('todo.home');
    }
}


