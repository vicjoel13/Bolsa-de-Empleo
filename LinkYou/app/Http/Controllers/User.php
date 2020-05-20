<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\create_post_table;
class User extends Controller
{
    public function showJobs(){
    $jobs=create_post_table::all();

    return view('ShowJob',['jobs'=>$jobs]);
    }
}
