<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\create_post_table;
class User extends Controller
{
    public function showJobs(){
    $jobs=create_post_table::all()->where('isActive',1);

    return view('user.ShowJob',['jobs'=>$jobs]);
    }

    public function IndexC($id){
        $jobs=create_post_table::all()->where('id_company',$id);
    
        return view('company.indexC',['jobs'=>$jobs]);
        }

        public function PostJob(){
    
        
            return view('user.PostJob');
            }
}
