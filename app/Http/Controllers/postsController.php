<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class postsController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    
}
