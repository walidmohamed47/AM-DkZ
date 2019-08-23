<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transfer;
use App\Money;
use App\Report;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
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
        $customers = User::where('roleID', 4)->get();
        return view("Customer.view",compact('customers'));
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
        return view('Customer.create');
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
        $newCustomer->roleID = 4;
        $newCustomer->save();
        return redirect("displayCustomers");
    }

    public function createFirst()
    {
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        return view('Customer.createCustomer');
    }

    public function storeFirst(Request $request)
    {
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $name = $request->input('name');
    	return view('Customer.viewCustomerFirst',compact('name'));
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
        return view("Customer.detail",compact('customer'));
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
        return view("Customer.update",compact('customer'));
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
        $newCustomer->roleID = 4;
        $newCustomer->save();
        return redirect("displayCustomers");
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
        return redirect("displayCustomers");
    }

    public function transefer($id){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $message = ' ';
        $customer = User::findOrfail($id);
        return view("Customer.transefer",compact('customer','message'));
    }

    public function doneTransfer(Request $request, $id){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }

        $newCustomer = User::findOrfail($id);

        if ($newCustomer->walet >= $request->input('walet')) {
            $newCustomer->walet -= $request->input('walet');
            $newCustomer->save();

            $newCustomer = new Transfer();
            $newCustomer->customerID = $id;
            $newCustomer->money = $request->input('walet');
            $newCustomer->phone = $request->input('phone');
            $newCustomer->comType = $request->input('comType');
            // Increase companyType
            $newCustomer->type = 1;

            $date = \DateTime::createFromFormat('U.u', microtime(true));
            $DocDate = $date->format('Y-m-d');

            $newCustomer->dateCustomer = $DocDate;

            $newCustomer->save();
            return redirect()->route('dashbord', $id);
        }
        else{

        	$customer = User::findOrfail($id);
        	$message = ' عفوا لا يوجد رصيد كافي ف المحفظه' ;
            return view("Customer.transefer",compact('customer','message'));

        }
        $message = ' ';
        $customer = User::findOrfail($id);
        return view("Customer.transefer",compact('customer','message'));
    }

     public function reportCustomer($id){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $user =User::where('id', $id)->first();
        $transfers = Transfer::where('customerID', $id)->get();
        return view("Customer.reportCustomer",compact('transfers','user'));
    }
    
    public function dashbord($id){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $date = \DateTime::createFromFormat('U.u', microtime(true));
        $DocDate = $date->format('Y-m-d');
        $user =User::where('id', $id)->first();
        $transfers = Transfer::where('customerID', $id)->orderBy('id', 'desc')->where('dateCustomer',$DocDate)->take(5)->get();
        return view("Customer.dashboard",compact('transfers','user'));
    }


    public function login(Request $request)
    {
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        
        if($request->isMethod('post'))
        {
            $user =User::where('phone','=',$request->input("phone"))->first();

            if ($user!=null)
            {
                if ($user->password == $request->input("password")) 
                {
                    
                    $_SESSION['userName']=$user->userName;
                    $_SESSION['phone']=$user->phone;
                    $_SESSION['id']=$user->id;
                    if ($user->roleID == 1 )
                    {
                        $_SESSION['roleID'] = 1;
                        return redirect('/transferSuperAdmin');
                    }
                    if ($user->roleID == 2 )
                    {
                        $_SESSION['roleID'] = 2;
                        return redirect("displayCustomers");
                    }
                    if ($user->roleID == 3 )
                    {
                        $_SESSION['roleID'] = 3;
                        $transfers = Transfer::where('type', 1)->get();
                        return view("Employee.dashboard",compact('transfers'));
                    }
                    if ($user->roleID == 4 )
                    {
                        $_SESSION['roleID'] = 4;
                        return redirect()->route('dashbord', $user->id);
                    }
                    if ($user->roleID == 5 )
                    {
                        $_SESSION['roleID'] = 5;
                        return redirect('/transferTimeCloser');
                    }
                }
            }
        }
        return view('login');
    }

    public function logout()
    {
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        session_destroy();
        return redirect('/');
    }



    public function employeeTransfer(){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $transfers = Transfer::where('type', 1)->get();
        return view("Employee.dashboard",compact('transfers'));
    }

    public function adminTransfer(){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $transfers = Transfer::all();
        return view("Employee.dashbordAdmin",compact('transfers'));    
    }

    

    public function employeeTransferScusses($id){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $transfer = Transfer::where('id', $id)->first();
        $transfer->employeeID = $_SESSION['id'];
        $transfer->type = 2;
        $date = \DateTime::createFromFormat('U.u', microtime(true));
        $DocDate = $date->format('Y-m-d');
        $transfer->date = $DocDate;
        $transfer->save();
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
        return redirect("employeeTransfer");
    }

    public function employeeTransferfailed($id){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $transfer = Transfer::where('id', $id)->first();
        $transfer->employeeID = $_SESSION['id'];
        $transfer->type = 3;
        $date = \DateTime::createFromFormat('U.u', microtime(true));
        $DocDate = $date->format('Y-m-d');
        $transfer->date = $DocDate;

        $user = User::where('id', $transfer->customerID)->first();
        $user->walet += $transfer->money;

        $user->save();
        $transfer->save();
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
        return redirect("employeeTransfer");
    }

    public function start(){

         return view('index');
    }


    public function transeferMoney($id){
        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        $customer = User::findOrfail($id);
        return view("Admin.transefer",compact('customer'));
    }

    public function doneTransferMoney(Request $request, $id){

        if ($_SESSION['userName']= null) {
            return redirect('login');
        }
        
        $newCustomer = User::findOrfail($id);
        $newCustomer->walet += $request->input('walet');
        $newCustomer->save();

        $newTransfer = new Money();
        $newTransfer->customerID = $id;
        $newTransfer->money = $request->input('walet');
        $newTransfer->adminID = $_SESSION['id'];
        $date = \DateTime::createFromFormat('U.u', microtime(true));
        $DocDate = $date->format('Y-m-d');
        $newTransfer->date = $DocDate;
        $newTransfer->save();
        return redirect("displayCustomers");
    }



}