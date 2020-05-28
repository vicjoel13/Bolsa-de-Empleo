<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\create_category_tables;
use Illuminate\Http\Request;
use App\Http\Resources\job as category;

class job_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=create_category_tables::orderBy('created_at', 'ASC')->paginate(10);
        return category::collection($jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job_category=$request->isMethod('put') ? create_category_tables::findOrFail($request->id):new create_category_tables;
       
        $job_category->id =$request->input('id');
        $job_category->id =$request->input('category');
        if($job_category->save()){
            return new category($job_category); 
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\job_category  $job_category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs=create_category_tables::findOrFail($id);
        return new category($jobs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\job_category  $job_category
     * @return \Illuminate\Http\Response
     */
    public function edit(job_category $job_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\job_category  $job_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job_category $job_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\job_category  $job_category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get Job_category
       $job=create_category_tables::findOrFail($id);
       //delete Job_caegory
   if($job->delete()){
     return new category($job);
   }
    }
}
