<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companiesController extends Controller
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
        if ( isset(\Auth::user()->username) ) {
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
                    return view('auth/login');
            }
        } else {
            return view('auth/login');
        }

        return view('add_customer');
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
                    break;
                case 'Development';
                    return redirect(action('developmentController@index'));
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

        $this->validate($request, [
            'name'                  => 'required|string',
            'preposition'           => 'string|nullable',
            'lastname'              => 'required|string',
            'company'               => 'required|string',
            'phone'                 => 'required|string',
            'establishment'         => 'required|string',
            'zipcode'               => 'required|string',
            'email'                 => 'required|email',
            'adress'                => 'required|string',
            'house_number'          => 'required|integer',
            'bank_account_number'   => 'required|string',
            'vat_number'            => 'required',
            'ledger_number'         => 'required|integer',
            'maximum'               => 'required|integer|min:0',
            'bcr_control'         => '',
            'initials'              => 'required',
        ]);

        $company = new \App\Company();

        $company->name                  = $request->name;
        $company->last_name             = $request->lastname;
        $company->company_name          = $request->company;
        $company->phone_number          = $request->phone;
        $company->residence             = $request->establishment;
        $company->zipcode               = $request->zipcode;
        $company->email                 = $request->email;
        $company->adress                = $request->adress;
        $company->house_number          = $request->house_number;
        $company->bank_account_number   = $request->bank_account_number;
        $company->vat_number            = $request->vat_number;
        $company->ledger_number         = $request->ledger_number;
        $company->maximum               = $request->maximum;
        $company->bcr_control           = $request->bcr_control;
        $company->initials              = $request->initials;

        $company->save();

        return redirect(action('salesController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    }
}
