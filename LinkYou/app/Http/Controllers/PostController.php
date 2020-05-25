<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\create_post_table;
class PostController extends Controller
{

    public function showAll()
    {
        $post = create_post_table::all()->toJson();
        return $post;
    }




    public function create()
    {
        return view('user.PostJob');
    }
    public function store()
    {
        $post = new create_post_table();
        $post->company = request('company');
        $post->time_type = request('time_type');
        $post->logo = request('logo');
        $post->URL = request('URL');
        $post->position = request('position');
        $post->location = request('location');
        $post->job_category = request('job_category');
        $post->description = request('description');
        $post->application = request('application');
        $post->email = request('email');
        $post->id_company = request('id_company');
        $post->save();
        return view('company.indexC');

    }
}
