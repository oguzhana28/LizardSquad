<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

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
		$file->move('uploads', $result);
		return $result;
	}

	public static function deleteStudent($id){
        $errors = [];

        // delete image file
        $deleteImageResult = Student::deleteImageForStudent($id);
        if(isset($deleteImageResult) && count($deleteImageResult) > 0) {
        	array_merge($errors, $deleteImageResult);
        }

        // delete record
        $row_deleted = Student::where('id' , $id)->delete();
        if(!$row_deleted) {
            $errors[] = "Could not delete record: " . $id;
        }
        
        return $errors;
    }

    // returns empty array if all went well, or array with messages if something went wrong
    public static function deleteImageForStudent($id) {
        $errors = [];
        $rows = Student::where('id' , $id)->get(['image'])->pluck('image');
        if (isset($rows[0]) && $rows[0] != "default.png"){
            $filename = $rows[0];
            $result = File::delete( base_path('/public/uploads/'). $filename);
            if( $result != 1 ) {
                $errors[] = "Could not delete file: " . $filename;
            }
        } 
        return $errors;
    }
	
}