<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
//use App\Http\Requests;
use App\Student;

class StudentsController extends Controller
{

    public function index()
    {       
    	$students = Student::getStudents();    
        return view('students', compact('students'));
    } 
    
    public function create()
    {       
        return view('createStudents');
    }

    public function upload(request $request){

		if(Input::hasFile('file')){
			$file = Input::file('file');
			$result = Student::uploadfile($file);
			$file->move('uploads', $result);
		}
		$firstname = $request->input('firstname');
        $prefix = $request->input('prefix');	
        $lastname = $request->input('lastname');	
        $mobile = $request->input('mobile');	
        $address = $request->input('address');	
        $house_number = $request->input('house_number');	
            
        $data = array('firstname'=>$firstname,'prefix'=>$prefix,'lastname'=>$lastname,'mobile'=>$mobile,'address'=>$address,'house_number'=>$house_number);
            
        $inserted = DB::table('students')->insert($data);

        if($inserted){
            return redirect('/students');
        }
	}

}