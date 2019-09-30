<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks=\App\Task::all();
        return view('index',compact('tasks'));
    }
    public function add(){
        return view('add');
    }
    public function insert(Request $request){
        $task=new Task();
        $task->title=$request->title;
        $task->content=$request->contented;
        $task->created=$request->created;
        $task->save();
        return redirect()->route("tasks.index");
    }
}
