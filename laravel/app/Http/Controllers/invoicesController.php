<?php

namespace App\Http\Controllers;

use App\Company;
use App\Invoice;
use App\Project;
use Illuminate\Http\Request;

class invoicesController extends Controller
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
                return redirect(action('salesController@index'));
                break;
            case 'Development';
                return redirect(action('developmentController@index'));
                break;
            case 'Finance':
                break;
            default:
                return redirect(view('home'));
        }

        $projects = Project::all();
        $invoices = Invoice::all();
        
        return view('finance/invoice')->with('projects', $projects)->with('invoices', $invoices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createInvoice($id)
    {
        switch (\Auth::user()->username) {
            case 'Sales':
                return redirect(action('salesController@index'));
                break;
            case 'Development';
                return redirect(action('developmentController@index'));
                break;
            case 'Finance':
                break;
            default:
                return redirect(view('home'));
        }

        return view('create_invoice')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( isset(\Auth::user()->username) ) {
            switch (\Auth::user()->username) {
                case 'Sales':
                    return redirect(action('salesController@index'));
                    break;
                case 'Development';
                    return redirect(action('developmentController@index'));
                    break;
                case 'Finance':
                    break;
                default:
                    return view('auth/login');
            }
        } else {
            return view('auth/login');
        }
        $invoice = new \App\Invoice();
        $company = \App\Company::find($request->id);

        $invoice->project_id = $request->id;
        $invoice->date = $request->date;
        $invoice->quantity = $request->quantity;
        $invoice->amount = $request->amount;

        $company->balance = $company->balance - $request->amount;
        $company->unpaid_invoices = $company->unpaid_invoices + $request->quantity;

        $invoice->save();
        $company->save();

//        return 'SOMETHING';
        return redirect(action('financeController@index'));
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
                    return redirect(action('developmentController@index'));
                    break;
                case 'Finance':
                    break;
                default:
                    return view('auth/login');
            }
        } else {
            return view('auth/login');
        }

        $companies = Company::find($id);
        $invoices = Invoice::all();
        
        return view('invoice')->with('companies', $companies)->with('invoices', $invoices);
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
        //
    }
}
