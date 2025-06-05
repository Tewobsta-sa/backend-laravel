<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // GET /api/tasks
    public function index()
    {
        return response()->json(Task::all(), 200);
    }

    // POST /api/tasks
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'completed' => false
        ]);

        return response()->json($task, 201);
    }

    // PUT /api/tasks/{id}
    public function update($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        $task->completed = true;
        $task->save();

        return response()->json($task, 200);
    }

    // DELETE /api/tasks/{id}
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted'], 200);
    }
}
