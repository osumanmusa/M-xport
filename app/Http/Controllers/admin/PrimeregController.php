<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Primereg;
use App\Models\Departments;
use App\Models\User;
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

class PrimeregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $user =User::find(Auth::guard('web')->user()->id);
        $propties=Primereg::select('*')->where('user_id','=',$user->id)->where('form_type','=','vending')->orderBy('created_at', 'desc')->paginate(10);
       return view('admin.properties.index',compact('propties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department=Departments::select('id','department_name')->get();
        return view('admin.properties.create',compact('department'));
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
            'client_type' => 'required',
            'sale_rent' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'whatsapp' => 'required',
            'property_type' => 'required',
            'c_location' => 'required',
            'p_location' => 'required',
            'p_plan' => 'required',
            'p_details' => 'required',
            'price' => 'required',
            'p_status' => 'required',
        ]);

        $status = "vending";
        $user =User::find(Auth::guard('web')->user()->id);
        $prop = new Primereg();
        $prop->client_status = $request->client_status;
        $prop->client_type = $request->client_type;
        $prop->client_name = $request->name;
        $prop->client_email = $request->email;
        $prop->contact_person = $request->contact_person;
        $prop->client_phone = $request->mobile;
        $prop->client_whatsapp = $request->whatsapp;
        $prop->client_location = $request->c_location;
        $prop->prop_date = $request->date;
        $prop->property_type = $request->property_type;
        $prop->property_location = $request->p_location;
        $prop->property_details = $request->p_details;
        $prop->payment_plan = $request->p_plan;
        $prop->property_status = $request->p_status;
        $prop->form_type = $status;
        $prop->property_price = $request->price;
        $prop->user_id = $user->id;

        $prop->save();

        if ($prop) {
            Toastr::success('Added successfully :)','success');
            return back();
        }
        else {
             Toastr::error('Something went wrong :)','error');
            return redirect()->route('admin.primereg.list');
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
         $res= Primereg::find($id);
     
        return view('admin.properties.show',compact('res'));
    }
    public function vshow($id)
    {
        $res= Primereg::find($id);
     

        return view('admin.properties.vshow',compact('res'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.properties.edit');
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
        $reg= Primereg::find($id);
        $reg->delete();
      
       Toastr::success('Delete successfully :)','success');
       return back();
    }

    public function vindex()
    {     
        $user =User::find(Auth::guard('web')->user()->id);
        $propties=Primereg::select('*')->where('user_id','=',$user->id)->where('form_type','=','purchasing')->orderBy('created_at', 'desc')->paginate(10);
       return view('admin.properties.vending_index',compact('propties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createreg()
    {
        $department=Departments::select('id','department_name')->get();
        return view('admin.properties.createreg',compact('department'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function vstore(Request $request)
    {
         $request->validate([
            'client_type' => 'required',
            'sale_rent' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'whatsapp' => 'required',
            'property_type' => 'required',
            'c_location' => 'required',
            'p_location' => 'required',
            'p_plan' => 'required',
            'p_details' => 'required',
            'price' => 'required',
        ]);

$status = "purchasing";
        $user =User::find(Auth::guard('web')->user()->id);
        $prop = new Primereg();
        $prop->client_status = $request->client_status;
        $prop->client_type = $request->client_type;
        $prop->client_name = $request->name;
        $prop->client_email = $request->email;
        $prop->contact_person = $request->contact_person;
        $prop->client_phone = $request->mobile;
        $prop->client_whatsapp = $request->whatsapp;
        $prop->client_location = $request->c_location;
        $prop->prop_date = $request->date;
        $prop->property_type = $request->property_type;
        $prop->property_location = $request->p_location;
        $prop->property_details = $request->p_details;
        $prop->payment_plan = $request->p_plan;
        $prop->property_price = $request->price;
        $prop->form_type = $status;
        $prop->user_id = $user->id;
        $prop->save();

        if ($prop) {
            Toastr::success('Added successfully :)','success');
            return back();
        }
        else {
             Toastr::error('Something went wrong :)','error');
            return redirect()->route('admin.primevending.list');
        }


    }

    

}
