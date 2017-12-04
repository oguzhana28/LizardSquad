<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
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

    public function upload(){

		if(Input::hasFile('file')){
			$file = Input::file('file');
			$filename = $file->getClientOriginalName();
			$extension = Input::file('file')->getClientOriginalExtension();
			$unique_name = md5($filename. time());
			$result = $unique_name . "." . $extension;
			$file->move('uploads', $result);
		}
	}

}