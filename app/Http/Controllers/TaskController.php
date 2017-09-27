<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
//    public function index()
//    {
//        $user = auth()->user();
//        $tasks = $user->tasks;
//        return view("tasks.index", ["tasks" => $tasks]);
//    }
//
//    public function create()
//    {
//        return view("tasks.create");
//    }
//
//    public function store(Request $request)
//    {
//        $task = Task::create([
//            'user_id' => auth()->id(),
//            'body' => $request->get('body'),
//        ]);
//        return redirect("/tasks/".$task->id);
//    }
//
//    public function show(Task $task)
//    {
//        return view("tasks.show", compact("task"));
//    }
//
//    public function delete(Task $task)
//    {
//        $task->delete();
//        return redirect("/tasks");
//    }
}
