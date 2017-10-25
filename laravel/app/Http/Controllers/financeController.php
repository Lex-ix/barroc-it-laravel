<?php

namespace App\Http\Controllers;

use App\Appointment;
use \App\Company;
use \App\Invoice;
use App\Project;
use App\User;
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
        $companies = Company::all();
        $projects = Project::all();
        
        return view('/finance')->with('companies', $companies)->with('projects', $projects);
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
//        for( $x = 0 ; $x <= 30;$x++)
//        {
            //====================USERS FAKER===================\\
//            $admin = new User();
//            $admin->username = $faker->userName;
//            $admin->password = $faker->password;
            
            //====================PROJECT FAKER=================\\
//            $admin = new Project();
//            $admin->company_id = $faker->numberBetween($min = 1, $max = 28);
//            $admin->project_name = $faker->word;
//            $admin->application_desc = $faker->text($maxNbChars = 200);
//            $admin->maintenance = $faker->numberBetween($min = 0, $max = 1);
//            $admin->operating_system = $faker->word;
//            $admin->finished = $faker->numberBetween($min = 0, $max = 1);
//            $admin->hardware_desc = $faker->text($maxNbChars = 200);
            
            //====================INVOICE FAKER================\\
//            $admin = new Invoice();
//            $admin->quantity = $faker->numberBetween($min = 100, $max = 1000);
//            $admin->amount = $faker->numberBetween($min = 100, $max = 1000);
            
            //=====================APPOINTMENT FAKER============\\
//            $admin = new Appointment();
//            $admin->appointment_desc = $faker->text($maxNbChars = 200);
            
            //=====================COMPANY FAKER================\\
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
//            $admin->name = $faker->firstName($gender = 'male'|'female');
//            $admin->last_name = $faker->lastName;
//            $admin->initials = $faker->randomLetter;
//            $admin->bcr_control = $faker->numberBetween(0, 1);
//
//            //=====================SAVE========================\\
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
//        $projects = new Project();
//        $projects->paused = 1;
//        $projects->save();
        
//        $companies = new Company();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = Company::find($id);
        foreach ($companies->project as $project) {
            if($project->paused == 0 && $companies->balance >= $companies->maximum){
                $update = Project::find($project->id);
                $update->paused = 1;
                $update->save();
            }
            else {
                $update = Project::find($project->id);
                $update->paused = 0;
                $update->save();
            }
        }
    
    
        return view('finance_details')->with('companies', $companies);
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
