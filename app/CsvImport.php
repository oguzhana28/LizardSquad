<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CsvImport extends Model
{
    public static function uploadfile($file){
          //Move Uploaded File
          $destinationPath = 'uploads';
          $file->move($destinationPath,$file->getClientOriginalName());
	}  
    public static function openAndReadfile($file){
         $file_n = base_path('/public/uploads/'.$file->getClientOriginalName());
         $file = fopen($file_n, "r");
        
        $columns=fgetcsv($file);    // get column names from first row, like 'id,firstname,prefix,lastname,lastname,image,mobile,address,house_number,favorite'
        while(!feof($file)){            // keep getting rows until file is finished
            $rowData[]=fgetcsv($file);
        }
        //array_pop($rowData);    // remove last, empty row

        $row_parsed = array();
        foreach ($rowData as $key => $value) {  // parse rows one by one
            $row = array();
            if (!empty($value)) {       // last row is sometimes empty, skip this row
                foreach($value as $key2=>$value2 ) {
                    //var_dump($key2 . '=' . $value2);
                    $row[$columns[$key2]]=$value2;
                }   
                $row_parsed[] = $row;
            }
        }
        return ($columns);
}
}
