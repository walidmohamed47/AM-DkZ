<?php

namespace App\Http\Controllers;
use App\User;
use App\Transfer;
use App\Money;
use App\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $customers = User::where('roleID', 3)->get();
        return view("Employee.view",compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        return view('Employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $newCustomer = new User();
        $newCustomer->name = $request->input('name');
        $newCustomer->userName = $request->input('userName');
        $newCustomer->email = $request->input('email');
        $newCustomer->password = $request->input('password');
        $newCustomer->phone = $request->input('phone');
        $newCustomer->NationalID = $request->input('NationalID');
        $newCustomer->address = $request->input('address');
        $newCustomer->notes = $request->input('notes');
        $newCustomer->roleID = 3;
        $newCustomer->save();
        return redirect("displayEmployees");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $customer = User::findOrfail($id);
        return view("Employee.detail",compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $customer = User::findOrfail($id);
        return view("Employee.update",compact('customer'));
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
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $newCustomer = User::findOrfail($id);
        $newCustomer->name = $request->input('name');
        $newCustomer->userName = $request->input('userName');
        $newCustomer->email = $request->input('email');
        $newCustomer->password = $request->input('password');
        $newCustomer->phone = $request->input('phone');
        $newCustomer->NationalID = $request->input('NationalID');
        $newCustomer->address = $request->input('address');
        $newCustomer->notes = $request->input('notes');
        $newCustomer->roleID = 3;
        $newCustomer->save();
        return redirect("displayEmployees");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $customer = User::findOrfail($id);
        $customer->delete();
        return redirect("displayEmployees");
    }

    public function refresh () {
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $transfers = Transfer::all();
        foreach ($transfers as $transfer) {

            if ($transfer->date == null) {

                $date = \DateTime::createFromFormat('U.u', microtime(true));
                $DocDate = $date->format('Y-m-d h:i:s');

                $craeted = ($transfer->created_at)->format('Y-m-d h:i:s');

                $startTime = Carbon::parse($craeted);
                $finishTime = Carbon::parse($DocDate);
                $totalDuration = $finishTime->diffInMinutes($startTime);

                gmdate('Y-m-d H:i:s', $totalDuration);

                if($totalDuration >= 2){
                    $report = Report::where('transfer_id',$transfer->id)->first();
                    if($report == null){
                        $newReport = new Report();
                        $newReport->date = $totalDuration;
                        $newReport->transfer_id = $transfer->id;
                        $newReport->save();
                    }
                    else{
                        $report->date = $totalDuration;
                        $report->save();
                    }
                    
                }
            }

            $craeted = ($transfer->created_at)->format('Y-m-d h:i:s');
            $startTime = Carbon::parse($craeted);
            $finishTime = Carbon::parse($transfer->date);
            $totalDuration = $finishTime->diffInMinutes($startTime);    
            gmdate('Y-m-d H:i:s', $totalDuration);
            if($totalDuration >= 2){
               $report = Report::where('transfer_id',$transfer->id)->first();
                    if($report == null){
                        $newReport = new Report();
                        $newReport->date = $totalDuration;
                        $newReport->transfer_id = $transfer->id;
                        $newReport->save();
                    }
            }
        }
        $transfers = Transfer::where('type', 1)->get();
        return view('Employee.dashboard')->with('transfers', $transfers);
    }
    public function adminReport()
    {
    	if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $reports = Report::all();
        return view('Employee.adminReport')->with('reports', $reports);
    }
    

}
