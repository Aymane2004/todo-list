<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

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
}

