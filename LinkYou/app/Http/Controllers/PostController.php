<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\create_post_table;
use App\Http\Resources\Post as Post;
class PostController extends Controller
{
    public function showAll()
    {
        $post = create_post_table::all()->toJson();
        return $post;
    }
    
    public function PostJob()
    {
        return view('user.PostJob');
    }

    public function EditJob($id)
    {
        return view('user.EditJob',['id'=>$id]);
        
    }
    public function CreateCategory()
    {
        return view('admin.CreateCategory');
    }
    public function store(Request $request)
    {
        $post=$request->isMethod('put') ? create_post_table::findOrFail($request->id):new create_post_table;
       
        $post->id =$request->input('id');
        $post->company =$request->input('company');
        $post->time_type = $request->input('time_type');
        $post->logo = $request->input('logo');
        $post->URL = $request->input('URL');
        $post->position =$request->input('position');
        $post->location = $request->input('location');
        $post->job_category = $request->input('job_category');
        $post->description = $request->input('description');
        $post->application =$request->input('application');
        $post->email =$request->input('email');
        $post->id_company = $request->input('id_company');
        if($post->save()){
            return new Post($post); 
         }

     
    }
    public function index()
    {
        //get jobs
        $jobs=create_post_table::orderBy('created_at', 'ASC')->
        where('isActive','1')->
        get();

        return Post::collection($jobs);
    }
    public function index2()
    {
        //get jobs
        $jobs=create_post_table::orderBy('created_at', 'ASC')->
        where('isActive','1')->
        get();

        return Post::collection($jobs);
    }
    
    public function indexCompany($id)
    {
        //get jobs of the company
        $jobs=create_post_table::orderBy('created_at', 'ASC')->where('id_company','$id')->paginate(10);
        return Post::collection($jobs);
    }
    public function show($id)
    {
       //get Job
       $jobs=create_post_table::findOrFail($id);

       //return SINGLE Job RESOURCE
       return new Post($jobs);
    }
    public function showCategory($category)
    {
       //get Job by category
       $jobs=create_post_table::orderBy('created_at', 'ASC')->where(['job_category'=>$category ,'isActive'=>'1'])->paginate(20);

       //return jobs of that category
       return new Post($jobs);
    }

    public function destroy($id)
    {
         //get Job
       $job=create_post_table::findOrFail($id);
         //delete Job
     if($job->delete()){
       return new Post($job);
     }
    }


}
