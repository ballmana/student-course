<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return response()->json(Task::all());
    }


    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->name;   
        $task->detail = $request->detail;
        $task->save();
        return response()->json($task);
    }

    public function show(Task $task)
    {
        $employees = $task->employees()->get();        
        return response()->json(['task'=>$task, 'employees'=>$employees]);        
    }

    public function update(Request $request, Task $task)
    {
        $task->name = $request->name;   
        $task->detail = $request->detail;
        $task->save();
        return response()->json($task);
    }

    public function destroy($id)
    {
        
    }
}
