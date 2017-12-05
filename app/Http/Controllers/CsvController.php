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
        if(!empty($file_data)){
            return view('csv/fields')->with("file_data", $file_data);
        }
    }
}
