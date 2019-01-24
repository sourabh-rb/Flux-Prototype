<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class toDoController extends Controller
{
    public function index()
    {
      $task = Task::all();
      return view('todo.index',['tasks'=>$task]);
    }

    public function create(Request $request)
    {
      if($request->input('task'))
      {
        $task = new Task;
        $task->content = $request->input('task');
        $task->save();
      }

      return redirect()->back();

    }

    public function update($id)
    {
      $task = Task::find($id);
      $task->toggleStatus();
      $task->save();
      return redirect()->back();

    }

    public function delete($id)
    {

      $task = Task::find($id);
      $task->delete();
      return redirect()->back();
    }
}
