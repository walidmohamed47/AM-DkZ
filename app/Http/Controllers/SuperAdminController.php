<?php

namespace App\Http\Controllers;
use App\User;
use App\Transfer;
use App\Money;
use DateTime;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
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
        return view("SuperAdmin.transfer",compact('employees'));    

    }
    public function transferResult(Request $request){  
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $from = $request->input('from');
        $to = $request->input('to');

        $transfers = Transfer::where('employeeID', $request->input('employeeID'))->where('type', 2)->whereBetween('date', array($from, $to))->get();
        return view("SuperAdmin.dashboard",compact('transfers'));
    }

    public function transferMoneySuperAdmin(){
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $employees = User::where('roleID', 2)->get();
        return view("SuperAdmin.transferMoney",compact('employees'));    

    }
    public function transferMoneyResult(Request $request){ 
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $from = $request->input('from');
        $to = $request->input('to');
        $transfers = Money::where('adminID', $request->input('employeeID'))->whereBetween('date', array($from, $to))->get();
        return view("SuperAdmin.dashboardMoney",compact('transfers'));
    }
}
