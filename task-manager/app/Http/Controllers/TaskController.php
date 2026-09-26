<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; 

class TaskController extends Controller
{
  
    public function index()
    {
        $tasks = Task::all(); 
        return view('tasks.index', compact('tasks'));
    }

    
    public function create()
    {
        return view('tasks.create');
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'task_name' => 'required|max:255',
            'due_date' => 'required|date',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }

    
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name' => 'required|max:255',
            'due_date' => 'required|date',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }

    
    public function updateStatus(Task $task)
    {
        $task->status = $task->status === 'Pending' ? 'Completed' : 'Pending';
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Task status updated!');
    }
}