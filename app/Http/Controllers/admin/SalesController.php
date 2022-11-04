<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Departments;
use App\Models\Recruit;
use App\Models\Sales;
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
use App\Http\Controllers\admin\SignedrouteController;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sales=Sales::select('*')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.sales.index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.create');
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
            'name' => 'required',
            'company' => 'required',
            'role' => 'required',
            'email' => 'required',
            'mobile' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'whatsapp' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
        ]);


        $salesreg = new Sales();
        $salesreg->name = $request->name;
        $salesreg->company = $request->company;
        $salesreg->email = $request->email;
        $salesreg->phone = $request->mobile;
        $salesreg->whatsapp = $request->whatsapp;
        $salesreg->role = $request->role;
        $salesreg->save();


        if ($salesreg) {
            Toastr::success('Successfully Created :)','success');
            return redirect()->route('admin.sales.list');
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
        
        $sale= Sales::find($id);
     
        return view('admin.sales.show',compact('sale'));


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
        $del= Sales::find($id);
        $del->delete();
      
       Toastr::success('Delete successfully :)','success');
       return back();
    }
}
