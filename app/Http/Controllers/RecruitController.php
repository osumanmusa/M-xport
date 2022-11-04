<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Departments;
use App\Models\Recruit;
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

class RecruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $recruits=Recruit::select('*')->where('status','=','accepted')->orderBy('created_at', 'desc')->paginate(10);
       return view('user.recruit.index',compact('recruits'));
    }  
    public function index2()
    {
       $recruits=Recruit::select('*')->where('status','=','rejected')->orderBy('created_at', 'desc')->paginate(10);
       return view('user.recruit.index2',compact('recruits'));
    }
    public function index3()
    {
       $recruits=Recruit::select('*')->orderBy('created_at', 'desc')->paginate(10);
       return view('user.recruit.index3',compact('recruits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('user.recruit.create');
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
            'email' => 'required',
            'role' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        $recruit = new Recruit();
        $recruit->name = $request->name;
        $recruit->email = $request->email;
        $recruit->role = $request->role;
        $recruit->status = $request->status;
        $recruit->date_applied = $request->date;
        $recruit->save();

        if ($recruit) {
            Toastr::success('Added successfully :)','success');
            return redirect()->route('user.recruit.list');
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
         $res= Recruit::find($id);
     
        return view('user.recruit.show',compact('res'));
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
        $del= Recruit::find($id);
        $del->delete();
      
       Toastr::success('Delete successfully :)','success');
       return back();
    }

    
}
