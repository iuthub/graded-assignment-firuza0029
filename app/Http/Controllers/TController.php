<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TController extends Controller
{
    //
    //function for getting tasks
    public function getTask(){
        return view('num',['objective' => Task::all()->toArray()]);
    }
    //function for editing tasks
    public function editTask($id){
        return view('editing',['object' => Task::find($id)]);
    }
    //function for showing editted tasks
    public function editTaskOut(Request $request){
        $task = Task::find($request->input('id'));
        $task->name = $request->input('name');
        $task->save();
        return redirect()->route('getTask')->with(['objective' => Task::all()->toArray(),'data' => 'Updated:)' .$req->input('id')]);
    }
    //function for adding new task
    public function addTask(Request $request){
        $task = new Task();
        $task->title = $request->input('name');
        $task->ticked = false;
        $task->save();
        return redirect()->route('getTask')->with(['objective' => Task::all()->toArray(), 'data'=>'New task']);
    }
    //function for deleting a task
    public function deleteTask($id){
        Task::find($id)->delete();
        return redirect()->route('getTask')->with(['objective' => Task::all()->toArray(), 'data' => 'Successfully deleted;)' . $id]);
    }
}
