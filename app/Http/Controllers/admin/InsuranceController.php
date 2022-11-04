<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regforms;
use App\Models\User;
use App\Models\Insurance;
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

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $policing= Insurance::select('*')->where('type','=','policing')->orderBy('created_at', 'desc')->paginate(6);
       return view('admin.insurance.index',compact('policing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insurance.create');
    }
    public function commission()
    {
      $commission= Insurance::select('*')->where('type','=','commission')->orderBy('created_at', 'desc')->paginate(6);
       return view('admin.insurance.commissionindex',compact('commission'));
    }
    public function createcommission()
    {
        return view('admin.insurance.createcommission');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'client_name' => 'required',
            'business_type' => 'required',
            'policy_number' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'vehicle_number' => 'required',
            'make_of_vehicle' => 'required',
            'colour' => 'required',
            'premium' => 'required',
            'contact_person' => 'required',
            'phone' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'insurance_company' => 'required',
            'sum_insured' => 'required',
            'sales_person' => 'required',
        ]);

        $policing = new Insurance();
        $policing->type = $request->type;
        $policing->client_name = $request->client_name;
        $policing->business_type = $request->business_type;
        $policing->policy_number = $request->policy_number;
        $policing->period_from = $request->start_date;
        $policing->period_to = $request->end_date;
        $policing->vehicle_number = $request->vehicle_number;
        $policing->make_of_vehicle = $request->make_of_vehicle;
        $policing->colour = $request->colour;
        $policing->premium = $request->premium;
        $policing->contact_person = $request->contact_person;
        $policing->contact_number = $request->phone;
        $policing->insurance_company = $request->insurance_company;
        $policing->sum_insured = $request->sum_insured;
        $policing->sales_person = $request->sales_person;
        $policing->save();

        if ($policing) {
            Toastr::success('success :)','success');
            return redirect()->route('admin.policing.list');
        }
        else {
             Toastr::error('Something went wrong :)','error');
            return back()->with('error', 'Failed! not created');
        }


    }
     public function storecommission(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'client_name' => 'required',
            'business_type' => 'required',
            'policy_number' => 'required',
            'premium' => 'required',
            'insurance_company' => 'required',
            'sum_insured' => 'required',
            'commission' => 'required',
            'sales_person' => 'required',
        ]);
    
        $policing = new Insurance();
        $policing->type = $request->type;
        $policing->client_name = $request->client_name;
        $policing->business_type = $request->business_type;
        $policing->policy_number = $request->policy_number;
        $policing->period_from = $request->start_date;
        $policing->period_to = $request->end_date;
        $policing->vehicle_number = $request->vehicle_number;
        $policing->make_of_vehicle = $request->make_of_vehicle;
        $policing->colour = $request->colour;
        $policing->premium = $request->premium;
        $policing->contact_person = $request->contact_person;
        $policing->contact_number = $request->phone;
        $policing->insurance_company = $request->insurance_company;
        $policing->sum_insured = $request->sum_insured;
        $policing->sales_person = $request->sales_person;
        $policing->save();

        if ($policing) {
            Toastr::success('success :)','success');
            return redirect()->route('admin.commission.list');
        }
        else {
             Toastr::error('Something went wrong :)','error');
            return back()->with('error', 'Failed! not created');
        }


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
