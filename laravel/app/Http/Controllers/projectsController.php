<?php

namespace App\Http\Controllers;

use App\Company;
use App\Project;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\ProcessHelper;

class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        switch (\Auth::user()->username) {
            case 'Sales':
                break;
            case 'Development';
                return redirect(action('developmentController@index'));
                break;
            case 'Finance':
                return redirect(action('financeController@index'));
                break;
            default:
                return redirect(view('home'));
        }

        $id = $_GET['id'];

        return view('projects/create')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch (\Auth::user()->username) {
            case 'Sales':
                break;
            case 'Development';
                return redirect(action('developmentController@index'));
                break;
            case 'Finance':
                return redirect(action('financeController@index'));
                break;
            default:
                return redirect(view('home'));
        }

        $this->validate($request, [
            'company_id'        => 'required|integer',
            'name'              => 'required|string',
            'application_desc'  => 'required|string',
            'maintenance'       => 'required|integer',
            'operating_system'  => 'required|string',
            'hardware_desc'     => 'required|string',
        ]);

        $project = new \App\Project();

        $project->company_id        = $request->company_id;
        $project->name              = $request->name;
        $project->application_desc  = $request->application_desc;
        $project->maintenance       = $request->maintenance;
        $project->operating_system  = $request->operating_system;
        $project->hardware_desc     = $request->hardware_desc;

        $project->save();

        return redirect(action('salesController@show', $request->company_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        switch (\Auth::user()->username) {
            case 'Sales':
                break;
            case 'Development';
                return redirect(action('developmentController@index'));
                break;
            case 'Finance':
                return redirect(action('financeController@index'));
                break;
            default:
                return redirect(view('home'));
        }

        $project = \App\Project::find($id);

        return view('projects/show')->with('project', $project);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        switch (\Auth::user()->username) {
            case 'Sales':
                break;
            case 'Development';
                return redirect(action('developmentController@index'));
                break;
            case 'Finance':
                return redirect(action('financeController@index'));
                break;
            default:
                return redirect(view('home'));
        }

        $project = Project::findOrFail($id);
        $project->delete();

        return redirect(action('salesController@show', $project->company_id));
    }
}
