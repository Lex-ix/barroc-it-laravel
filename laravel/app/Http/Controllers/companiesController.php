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
//        dd($request);

        $this->validate($request, [
            'name' => 'required|string',
            'preposition' => 'string|nullable',
            'lastname' => 'required|string',
            'company' => 'required|string',
            'phone' => 'required|string',
            'establishment' => 'required|string',
            'zipcode' => 'required|string',
            'email' => 'required|email',
        ]);

        $company = new \App\Company();

        $company->name = $request->name;
        $company->last_name = $request->lastname;
        $company->company_name = $request->company;
        $company->phone_number = $request->phone;
        $company->residence = $request->establishment;
        $company->zipcode = $request->zipcode;
        $company->email = $request->email;

        $company->save();

//        return redirect('projects');
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
        //
    }
}
