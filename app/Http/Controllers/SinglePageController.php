<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SinglePageController extends Controller
{
    public function index() {
        $users = DB::select('select * from users');
        return view('dash',['users'=>$users]);
        
    }
}
