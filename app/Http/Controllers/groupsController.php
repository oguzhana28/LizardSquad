<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Groups;

class GroupsController extends Controller
{
    
protected $request;
    
    public function __construct(\Illuminate\Http\Request $request)
    {
        $this->middleware('auth');
         $this->request = $request;
    }
    
    public function index()
    {
        $groups = Groups::get();
            
        return view('groups.index', compact('groups'));
    }

    public function view($id)
    {
        $groups = Groups::getGroupsById($id);
        return view('groups.view', compact('groups'));
    }
    
    public function delete($id)
    {
        
        $deleted = Groups::where('id' , $id)->delete();
        
        if($deleted){
             return redirect('groups');
        }
    }
    
    public function create()
    {  
        $groups = Groups::get();

        return view('groups.create', compact('groups'));
    }
    
        public function insert()
    {  
    
        $name = $this->request->input('GroupName');
        $favorite = $this->request->input('Favorite');
            
        $data = array('name'=>$name,'favorite'=>$favorite);
            
        $inserted = Groups::insert($data);

        if($inserted){
            return redirect('groups');
        }
    }
    
    public function edit($id)
    {  
        $groups = Groups::where('id',$id)->first();
        return view('groups.edit',compact('groups'));
    }
    
        public function update($id)
    {  
        $name = $this->request->input('GroupName');
        $favorite = $this->request->input('Favorite');
            
            $data = array('name'=>$name,'favorite'=>$favorite);
            $updated = Groups::where('id',$id)->update($data);
            if($updated){
                return redirect('groups');
            }else{
                return redirect('groups')->withErrors(['could not update', 'The Message']);;
            }
    }
    public function admin()
    {
        $groups = Groups::get();

        return view('backend', compact('groups'));
    }

    public function view_students()
    {
        $students = Groups::getGroupsById();
        //var_dump($students);
        return view('groups.index', compact('groups'));
    }
}
