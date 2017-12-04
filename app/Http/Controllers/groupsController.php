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
    
    public function delete($id)
    {
        
        $deleted = Groups::where('id' , $id)->delete();
        
        if($deleted){
             return redirect('GroupsController@index');
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
            return redirect('GroupsController@index');
        }
    }
    
    public function edit($id)
    {  
        $groups = Groups::where('id',$id)->first();
        return view('edit',compact('groups'));
    }
    
        public function update($id)
    {  
        $name = $this->request->input('GroupName');
        $favorite = $this->request->input('Favorite');
            
            $data = array('name'=>$name,'favorite'=>$favorite);
            $updated = Groups::where('id',$id)->update($data);
            if($updated){
                return redirect('GroupsController@index');
            }else{
                return redirect('GroupsController@index')->withErrors(['could not update', 'The Message']);;
            }
    }
    public function admin()
    {
        $groups = Groups::get();

        return view('backend', compact('groups'));
    }
}
