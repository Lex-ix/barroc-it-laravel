<?php

namespace App\Http\Controllers;

use \App\Company;
use \App\Invoice;
use Illuminate\Http\Request;
use Faker\Factory;
use phpDocumentor\Reflection\Types\Null_;

class financeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = \App\Company::all();
        return view('/finance')->with('companies', $companies);
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
//        for( $x = 0 ; $x < 100;$x++)
//        {
//            $admin = new Company();
//            $admin->company_name = $faker->company;
//            $admin->residence = $faker->city;
//            $admin->residence = $faker->city;
//            $admin->zipcode = $faker->postcode;
//            $admin->zipcode1 = $faker->postcode;
//            $admin->adress = $faker->streetName;
//            $admin->adress1 = $faker->streetName;
//            $admin->house_number = $faker->buildingNumber;
//            $admin->house_number1 = $faker->buildingNumber;
//            $admin->unpaid_invoices = $faker->numberBetween($min = 0, $max = 10);
//            $admin->bank_account_number = $faker->bankAccountNumber;
//            $admin->vat_number = $faker->numerify('ad ####');
//            $admin->ledger_number = $faker->randomNumber($nbDigits = Null, $strict = false);
//            $admin->maximum = $faker->numberBetween($min = 0, $max = 1000);
//            $admin->balance = $faker->numberBetween($min = 0, $max = 1000);
//            $admin->credit_worthy = $faker->numberBetween($min = 0, $max = 1);
//            $admin->email = $faker->email;
//            $admin->fax_number = $faker->randomNumber($nbDigits = Null, $strict = false);
//            $admin->phone_number = $faker->phoneNumber;
//            $admin->phone_number1 = $faker->phoneNumber;
//            $admin->name = $faker->name;
//            $admin->last_name = $faker->lastName;
//            $admin->initials = $faker->randomLetter;
//            $admin->bcr_control = $faker->randomNumber($nbDigits = Null, $strict = false);
//            $admin->save();
//        }
        return view('invoice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companies = new Company();
        $companies->company_id = $request->company_id;
        $companies->company_name = $request->company_name;
        $companies->residence = $request->residence;
        $companies->residence1 = $request->residence1;
        $companies->zipcode = $request->zipcode;
        $companies->zipcode1 = $request->zipcode1;
        $companies->adress = $request->adress;
        $companies->adress1 = $request->adress1;
        $companies->house_number = $request->house_number;
        $companies->house_number1 = $request->house_number1;
        $companies->unpaid_invoices = $request->unpaid_invoices;
        $companies->bank_account_number = $request->bank_account_number;
        $companies->vat_number = $request->vat_number;
        $companies->ledger_number = $request->ledger_number;
        $companies->maximum = $request->maximum;
        $companies->balance = $request->balance;
        $companies->credit_worthy = $request->credit_worthy;
        $companies->email = $request->email;
        $companies->fax_number = $request->fax_number;
        $companies->phone_number = $request->phone_number;
        $companies->phone_number1 = $request->phone_number1;
        $companies->name = $request->name;
        $companies->last_name = $request->last_name;
        $companies->initials = $request->initials;
        $companies->bcr_control = $request->bcr_control;
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
