<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class developmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = \App\Project::all();
        return view('development/development')->with('projects', $projects);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $faker = Factory::create();
//
//        for( $x = 0 ; $x < 30;$x++)
//        {
//            $project = new Project();
//            $
//            $project->save();
//        }



        $projects = \App\Project::all();
        return view('development/development_start')->with('projects', $projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projects = new Project();
        $projects->project_id = $request->project_id;
        $projects->company_id = $request->company_id;
        $projects->application_desc = $request->application_desc;
        $projects->maintenance = $request->maintenance;
        $projects->operating_system = $request->operating_system;
        $projects->finished = $request->finished;
        $projects->hardware_desc  = $request->hardware_desc;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = Project::find($id);
        return view('development/development_detail')->with('projects', $projects);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
