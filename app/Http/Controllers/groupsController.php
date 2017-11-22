<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\groups;

class groupsController extends Controller
{
    
protected $request;
    
    public function __construct(\Illuminate\Http\Request $request)
    {
        $this->middleware('auth');
         $this->request = $request;
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
        public function insert()
    {  
    
        $name = $this->request->input('GroupName');
        $favorite = $this->request->input('Favorite');
            
        $data = array('name'=>$name,'favorite'=>$favorite);
            
        $inserted = DB::table('groeps')->insert($data);

        if($inserted){
            return redirect('/groups');
        }
    }
    
    public function edit($id)
    {  
        $groups = DB::table('groeps')->where('id',$id)->first();
        return view('edit',compact('groups'));
    }
    
        public function update($id)
    {  
        $name = $this->request->input('GroupName');
        $favorite = $this->request->input('Favorite');
            
            $data = array('name'=>$name,'favorite'=>$favorite);
            $updated = DB::table('groeps')->where('id',$id)->update($data);
            if($updated){
                return redirect('/groups');
            }else{
                return redirect('/groups')->withErrors(['could not update', 'The Message']);;
            }
    }

}
