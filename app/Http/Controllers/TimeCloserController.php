<?php

namespace App\Http\Controllers;
use App\User;
use App\Transfer;
use App\Money;
use App\Report;
use DateTime;
use Illuminate\Http\Request;

class TimeCloserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function transfer(){
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $employees = User::where('roleID', 3)->get();
        return view("TimeCloser.transfer",compact('employees'));
    }
    public function transferResult(Request $request){ 

    	if ($_SESSION['userName']= null) {
            return redirect('login');
        } 

        $from = $request->input('from');
        $to = $request->input('to');

        $transfers = Transfer::where('employeeID', $request->input('employeeID'))->where('type', 2)->get();
        return view("TimeCloser.dashboard",compact('transfers'));
    }
    
    public function reportTimeCloser()
    {
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $reports = Report::all();
        return view('TimeCloser.reportTimeCloser')->with('reports', $reports);
    }
}
