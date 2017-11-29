<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    public static function getStudents(){
	$students = DB::table('students')->get();
	return $students;
    }
}
