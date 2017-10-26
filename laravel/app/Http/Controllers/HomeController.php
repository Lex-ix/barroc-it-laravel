<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
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
    }
}
