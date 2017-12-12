<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\CsvImport;

class CsvController extends Controller
{
        public function __construct(\Illuminate\Http\Request $request)
    {
        $this->middleware('auth');
         $this->request = $request;
    }
    
    public function index(){
        return view('csv/index');
    } 
    public function upload(){
        
    $file = $this->request->file('csv');
        $result = CsvImport::uploadfile($file);
        $file_data = CsvImport::openAndReadfile($file, $result);
        $file_columns = $file_data[0];
        $file_data = $file_data[1];
        $insertFileData = CsvImport::insertFileData($file_data);
        if(!empty($file_data)){
            return view('csv/fields')->with("file_columns", $file_columns)->with("file_data", $file_data);
        }
    }
    
    public function selectAndImport(){
        $select = $this->request->except('_token');
        $result = CsvImport::insertselect($select);
        $readData = CsvImport::readData();
            return view('csv/selectAndImport')->with('readData',$readData);
    }
    public function insertIntoDB(){
        $selected = $this->request->except('_token');
        $result = CsvImport::insertIntoDB($selected);
        dd($result);

    }
}
