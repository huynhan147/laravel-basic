<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Tasks;

class TasksController extends Controller
{
  public function index (){
      $tasks = Tasks::all();

      return view('task.index',compact('tasks'));
  }
  public function show(Tasks $task){
//      return $task;
//      $task = Tasks::find($id);

      return view('task.show',compact('task'));
  }
}
