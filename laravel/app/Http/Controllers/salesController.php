<?php

namespace App\Http\Controllers;

use App\Company;
use Faker\Factory;
use Illuminate\Http\Request;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
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

        $companies = \App\Company::All();

        return view('sales/sales')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

        $company = \App\Company::find($id);

        return view('sales/show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

        $company = Company::findOrFail($id);
        $company->delete();

        return redirect(action('salesController@index'));
    }
}
