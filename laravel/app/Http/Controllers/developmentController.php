<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class developmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if ( isset(\Auth::user()->username) ) {
            switch (\Auth::user()->username) {
                case 'Sales':
                    return redirect(action('salesController@index'));
                    break;
                case 'Development';
                    break;
                case 'Finance':
                    return redirect(action('financeController@index'));
                    break;
                default:
                    return view('auth/login');
            }
        } else {
            return view('auth/login');
        }

        $projectsS = DB::table('tbl_project')
            ->SELECT(DB::raw('*'))
            ->WHERE ([
                ['started' , '=' , 1],
                ['finished' , '!=', 1],
                ['paused', '=', 0],
                ['deleted_at', '=', null]
            ])
            ->get();

        $projectsF = DB::table('tbl_project')
            ->SELECT(DB::raw('*'))
            ->WHERE ([
                ['started' , '=' , 1],
                ['finished' , '!=', 1],
                ['paused', '=', 1],
                ['deleted_at', '=', null]
            ])
            ->get();



        $projects = \App\Project::all();
        return view('development/development')
            ->with('projects', $projects)
            ->with('projectsS', $projectsS)
            ->with('projectsF', $projectsF);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( isset(\Auth::user()->username) ) {
            switch (\Auth::user()->username) {
                case 'Sales':
                    return redirect(action('salesController@index'));
                    break;
                case 'Development';
                    break;
                case 'Finance':
                    return redirect(action('financeController@index'));
                    break;
                default:
                    return view('auth/login');
            }
        } else {
            return view('auth/login');
        }




//        $faker = Factory::create();
//
//        for( $x = 0 ; $x < 30;$x++)
//        {
//            $project = new Project();
//            $
//            $project->save();
//        }
        $projectsQ = DB::table('tbl_project')
            ->SELECT(DB::raw('*'))
            ->WHERE ([
                ['started' , '=' , 0],
                ['finished' , '!=', 1],
                ['paused', '=', 0],
                ['deleted_at', '=', null]
            ])
            ->get();

        $projectsA = DB::table('tbl_project')
            ->SELECT(DB::raw('*'))
            ->WHERE ([
                ['started' , '=' , 1],
                ['finished' , '!=', 1],
                ['paused', '=', 0],
                ['deleted_at', '=', null]
            ])
            ->get();


        $projects = \App\Project::all();
        return view('development/development_start')
            ->with('projects', $projects)
            ->with('projectsQ', $projectsQ)
            ->with('projectsA', $projectsA);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id = null)
    {
        if ( isset(\Auth::user()->username) ) {
            switch (\Auth::user()->username) {
                case 'Sales':
                    return redirect(action('salesController@index'));
                    break;
                case 'Development';
                    break;
                case 'Finance':
                    return redirect(action('financeController@index'));
                    break;
                default:
                    return view('auth/login');
            }
        } else {
            return view('auth/login');
        }

        $projects = new Project();
        $projects->project_id = $request->project_id;
        $projects->company_id = $request->company_id;
        $projects->application_desc = $request->application_desc;
        $projects->maintenance = $request->maintenance;
        $projects->operating_system = $request->operating_system;
        $projects->finished = $request->finished;
        $projects->hardware_desc = $request->hardware_desc;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ( isset(\Auth::user()->username) ) {
            switch (\Auth::user()->username) {
                case 'Sales':
                    return redirect(action('salesController@index'));
                    break;
                case 'Development';
                    break;
                case 'Finance':
                    return redirect(action('financeController@index'));
                    break;
                default:
                    return view('auth/login');
            }
        } else {
            return view('auth/login');
        }

        $projects = \App\Project::find($id);

        return view('development/development_detail')->with('projects', $projects);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $value)
    {

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
        if ( isset(\Auth::user()->username) ) {
            switch (\Auth::user()->username) {
                case 'Sales':
                    return redirect(action('salesController@index'));
                    break;
                case 'Development';
                    break;
                case 'Finance':
                    return redirect(action('financeController@index'));
                    break;
                default:
                    return view('auth/login');
            }
        } else {
            return view('auth/login');
        }

        if ($request->start == 'start') {

            $project = Project::find($id);

            $project->started = 1;

            $project->save();

            return redirect(action('developmentController@show', $id));
        } else if ($request->finish == 'finish') {
            $project = Project::find($id);

            $project->finished = 1;

            $project->save();

            return redirect(action('developmentController@create'));
        }
        return 'hi';

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
