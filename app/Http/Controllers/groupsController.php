<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\groups;

class groupsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
        public function index()
    {
        $groups = DB::table('groeps')->get();
        
            
        return view('groups', compact('groups'));
    }
    
    public function delete($id)
    {
        
        $deleted = DB::table('groeps')->where('id' , $id)->delete();
        
        if($deleted){
             return redirect('/groups');
        }
    }
    
    public function create()
    {  
        
        return view('create');
    }
        public function edit()
    {  
        
        return view('create');
    }

}
