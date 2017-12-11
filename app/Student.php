<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Student extends Model
{
    public static function getStudents(){
		$students = DB::table('students')->get();
		return $students;
    }

    public static function getStudentsById($id){
        $students = DB::table('students')->where('id', '=', $id)->get();
        return $students;
    }

    public static function uploadfile($file){
		$filename = $file->getClientOriginalName();
		$extension = Input::file('file')->getClientOriginalExtension();
		$unique_name = md5($filename. time());
		$result = $unique_name . "." . $extension;
		return $result;
	}
	
}