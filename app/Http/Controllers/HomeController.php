<?php

  

namespace App\Http\Controllers;

 

use Illuminate\Http\Request;
use App\Models\Regforms;
use App\Models\Task;
use App\Models\Todo;
use App\Models\User;
use App\Models\Insurance;
use App\Models\Sales;
use App\Models\Recruit;
use App\Models\Primereg;
use Auth;
use DB;
use Redirect;
use Brian2694\Toastr\Facades\Toastr;
use Mail;
use Hash;
use File;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\FormsImport;
use App\Imports\FormsExport;
use \Illuminate\Support\Facades\URL;

  

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

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {
        $user =User::find(Auth::guard('web')->user()->id);
        $regforms= Regforms::select('*')->get();
        $insurance=Insurance::select('*')->get();
        $recruit=Recruit::select('*')->get();
        $prime=Primereg::select('*')->get();
        $sales=sales::select('*')->get();
        $countinsurance=count($insurance);
        $countregforms= count($regforms);
        $countrecruit= count($recruit);
        $countprime= count($prime);
        $countsales=count($sales);
        Toastr::success('Welcome :)','success');

        return view('user.home')
        ->with('countregforms',$countregforms)
        ->with('countsales',$countsales)
        ->with('countrecruit',$countrecruit)
        ->with('countprime',$countprime)
        ->with('countinsurance',$countinsurance);

    } 

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome()

    {
        $user =User::find(Auth::guard('web')->user()->id);
        $regforms= Regforms::select('*')->get();
        $insurance=Insurance::select('*')->get();
        $recruit=Recruit::select('*')->get();
        $prime=Primereg::select('*')->get();
        $sales=sales::select('*')->get();
        $countinsurance=count($insurance);
        $countregforms= count($regforms);
        $countrecruit= count($recruit);
        $countprime= count($prime);
        $countsales=count($sales);
        Toastr::success('Welcome :)','success');

        return view('admin.dashboard')
        ->with('countregforms',$countregforms)
        ->with('countsales',$countsales)
        ->with('countrecruit',$countrecruit)
        ->with('countprime',$countprime)
        ->with('countinsurance',$countinsurance);


    }

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome()

    {

        return view('managerHome');

    }

}