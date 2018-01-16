<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class Groups extends Model
{
	public static function getGroupsById($id){
        $groups = DB::table('groups')->where('id', '=', $id)->get();
        return $groups;
    }

    public static function get_student_group(){
        $students = DB::table('student_x_groep')
            ->join('students', 'student_x_groep.students_id', '=', 'students.id')
            ->join('students', 'student_x_groep.groeps_id', '=', 'groups.id')
            ->select('student_x_groep.*', 'students.*', 'groups.*')
            ->get();
        return $students;
    }
}