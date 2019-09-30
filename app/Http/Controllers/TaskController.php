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
        $file=$request->inputFile;
        if(!$request->hasFile('inputFile')){
            $task->image=$file;
        }else{
            $fileName=$request->inputFileName;
            $fileExtension=$file->getClientOriginalExtension();
            $newFileName = "$fileName.$fileExtension";
            $task->image = $newFileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);
        }
        $task->save();
        return redirect()->route("tasks.index");
    }
}
