<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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

    public function upload(request $request)
    {
        if (Input::has('firstname','lastname','address','house_number') == true && Input::hasFile('file')) {
            $file = Input::file('file');
            $result = Student::uploadfile($file);
            $file->move('uploads', $result);
            $image = $result;

            $firstname = $request->input('firstname');
            $prefix = $request->input('prefix');    
            $lastname = $request->input('lastname');
            $image = $request->input($result);
            $mobile = $request->input('mobile');  
            $address = $request->input('address');  
            $house_number = $request->input('house_number');

            $data = array(
                'firstname'=>$firstname,
                'prefix'=>$prefix,
                'lastname'=>$lastname,
                'image'=>$result,
                'mobile'=>$mobile,
                'address'=>$address,
                'house_number'=>$house_number
            );

            $inserted = DB::table('students')->insert($data);
            return redirect('students');
        } else {
            \Session::flash('warning', "<div class='alert alert-danger text-center'>Fields are Required</div>");
            return redirect('students/create');
        }
    }
}