<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){
        return view('tasks.index');
    }

    public function store(Request $request){
       // dd($request->all());
       $request->validate([
           'title' => 'required'
       ]);
       //dd($request->task);
       
       Task::Create([
           'title' => $request->title
       ]);

    }
}
