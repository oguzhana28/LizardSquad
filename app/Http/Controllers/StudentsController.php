<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
}
