<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    public function getTasks(){
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function getTaskById($id){
        $task = Task::find($id);
        if(!isset($task)){
            return response()->json(['error'=>'Task not found'],404);
        }
        return response()->json($task);
    }

    public function createTask(CreateTaskRequest $request){
        Task::create($request->validated());

        return response()->json(['message' => 'Task created with success !'],201);
    }
    public function updateTask(UpdateTaskRequest $request,$id){
        $task = Task::find($id);
        if(!isset($task)){
            return response()->json(['error'=>'Task not found'],404);
        }
        
        $task->update([$request->validated()]);
        return response()->json(['message'=>'Task updated with success !'],200);
    }
    public function deleteTask(Request $request,$id){
        $task = Task::find($id);
        if(!isset($task)){
            return response()->json(['error'=>'Task not found'],404);
        }
        
        $task->delete();
        return response()->json(['message'=>'Task deleted with success !'],200);
    }
}

