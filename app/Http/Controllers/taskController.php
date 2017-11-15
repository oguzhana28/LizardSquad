<?php

namespace App\Http\Controllers;

use App\task;

class taskController extends Controller
{
    public function index(){
        
        $tasks = task::all();

        return view('tasks.index', compact('tasks'));
        
    }
    
    public function show(task $task){ //task wildcard
        
    
   //$tasks = task::find($id);
    
    return view('tasks.show', compact('task'));
        
    }
    public function welcome(){
        
        return view('welcome');
        
    }
    
}
