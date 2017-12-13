<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class Groups extends Model
{
	public static function getGroupsById($id){
        $students = DB::table('groups')->where('id', '=', $id)->get();
        return $students;
    }
}