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
      $file_name =  $file->getClientOriginalName();
        $data = array('csv'=>$file_name,'type'=>'students');
        $inserted = DB::table('import')->insert($data);
	}  
    public static function openAndReadfile($file){
         $file_n = base_path('/public/uploads/'.$file->getClientOriginalName());
         $file = fopen($file_n, "r");
        
        $columns=fgetcsv($file);    // get column names from first row, like 'id,firstname,prefix,lastname,lastname,image,mobile,address,house_number,favorite'
        foreach($columns as $key=>$collumn){
            $data_coll= array('col_nr'=>$key,'col_name'=>$collumn);
            $inserted = DB::table('import_collumns')->insert($data_coll);
        }
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
        return [$columns, $row_parsed];
}
    public static function insertFileData($fileData){
         foreach($fileData as $key => $fileData)
       $inserted = DB::table('import_rows')->insert($fileData);
    }
   public static function insertselect($options){
       foreach($options as $key => $option)
       $updated = DB::table('import_collumns')->where('col_nr', $key)->update(['col_dest' => $option]);
	}
    public static function readData(){
        $result = DB::table('import')->select('csv')->latest()->get();
        $file_n = base_path('/public/uploads/'.$result[0]->csv);
        $file = fopen($file_n, "r");
        
        $columns=fgetcsv($file);    // get column names from first row, like 'id,firstname,prefix,lastname,lastname,image,mobile,address,house_number,favorite'
        foreach($columns as $key=>$collumn){
            $data_coll= array('col_nr'=>$key,'col_name'=>$collumn);
            $inserted = DB::table('import_collumns')->insert($data_coll);
        }
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
        return $row_parsed;    
	}
    public static function insertIntoDB($selectedRow){
        foreach($selectedRow as $key => $sel){
           $result = DB::table('import_rows')->where('id','=',$key)->get();
            var_dump($selectedRow);
            var_dump($key);
            var_dump($sel);
            var_dump($result);
            //return $result;
        }
        die();
         
    }
}
