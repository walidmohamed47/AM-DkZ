<?php

namespace App\Http\Controllers;
use Response;

use App\User;
use App\Transfer;
use App\Money;
use App\Report;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function login(Request $request)
    {
        $phone = $request->input('phone');
        $password = $request->input('password');
    	$user =User::where('phone','=',$phone)->first();
        try {
            if ($user!=null)
            {
                try{
                    if ($user->password == $password)
                    {
                         if ($user->roleID == 4 )
                        {
                            $_SESSION['userName']=$user->userName;
                            $_SESSION['phone']=$user->phone;
                            $_SESSION['id']=$user->id;
                            return Response::json(['Success'=>true,'user'=>$user],200);
                        }
                    }
                    $user = null;
                    return Response::json(['Success'=>false,'user'=>$user, 'message'=>'يوجد خطأ ف البيانات'],200);
                }
                catch (Exception $e) {
                    return Response::json($e);
                }
            }
            $user = null;
            return Response::json(['Success'=>false,'user'=>$user,'message'=>'يوجد خطأ ف البيانات'],200);
        }
        catch (Exception $e) {
            return Response::json($e);
        }
    }

    public function report(Request $request)
    {
        $id = $request->input('id');
        $user =User::where('id', $id)->first();
        if($user != null){
            $_SESSION['userName']=$user->userName;
            $_SESSION['phone']=$user->phone;
            $_SESSION['id']=$user->id;
            $transfers = Transfer::where('customerID', $id)->get();
            $money = $user->walet;
            if($transfers != null)
            {                    
                return Response::json(['Success'=>true, 'transfers'=>$transfers, 'money'=>$money],200);
            }
            return Response::json(['Success'=>false,'message'=>"You Don't DO Any Transfer"],200);
        }   
        return Response::json(['Success'=>false,'message'=>"User Not Found"],200);
    }

    public function dashboard(Request $request)
    {
        $id = $request->input('id');
        $user =User::where('id', $id)->first();
        // Check The User Found Or NOT
        if($user != null){
            // Get Dat
            $_SESSION['userName']=$user->userName;
            $_SESSION['phone']=$user->phone;
            $_SESSION['id']=$user->id;
            $date = \DateTime::createFromFormat('U.u', microtime(true));
            $DocDate = $date->format('Y-m-d');
            // Get all transfer

            /*  
                I need to Add Column In DataBase Column Name dateCustomer To Done The API 
                And I Use It In My Controller
                To Get The Transfer Done ToDay 

            */

            $transfers = Transfer::where('customerID', $id)->where('dateCustomer',$DocDate)->get();
            // Check The User Do Transfer Or Not
            if($transfers != null){
                // Get Count of transfer done to day  
                $countOfTransfer = 0;
                // Get Total Money Done ToDay
                $totalMoney = 0;
                foreach ($transfers as $transfer) {
                    $countOfTransfer +=1;
                    $totalMoney += $transfer->money;
                }
                // Get Mony With The User
                $money = $user->walet;                
                return Response::json(['Success'=>true, 'countOfTransfer'=>$countOfTransfer, 'money'=>$money, 'totalMoney'=>$totalMoney],200);
            }
            return Response::json(['Success'=>false,'message'=>"You Don't DO Any Transfer"],200);
        }
        
        return Response::json(['Success'=>false,'message'=>"User Not Found"],200);
    }

    public function transfer(Request $request)
    {
        $id = $request->input('id');
        $phone = $request->input('phone');
        $price = $request->input('price');
        $newCustomer = User::findOrfail($id);
        if($newCustomer != null){
            $_SESSION['userName']=$newCustomer->userName;
            $_SESSION['phone']=$newCustomer->phone;
            $_SESSION['id']=$newCustomer->id;
            if ($newCustomer->walet >= $price) 
            {
                $newCustomer->walet -= $price;
                $newCustomer->save();

                $newCustomer = new Transfer();
                $newCustomer->customerID = $id;
                $newCustomer->money = $price;
                $newCustomer->phone = $phone;
                $date = \DateTime::createFromFormat('U.u', microtime(true));
                $DocDate = $date->format('Y-m-d');
                $newCustomer->dateCustomer = $date;
                $newCustomer->type = 1;
                $newCustomer->save();
                return Response::json(['Success'=>true,'message'=>'Your Transfer Success'],200);
            }
            return Response::json(['Success'=>false,'message'=>"You Don't Have Money"],200);
        }
        return Response::json(['Success'=>false,'message'=>"User Not Found"],200);
    }

    public function loginTimeCloser(Request $request)
    {
        $phone = $request->input('phone');
        $password = $request->input('password');
        $user =User::where('phone','=',$phone)->first();
        try {
            if ($user!=null)
            {
                try{
                    if ($user->password == $password)
                    {
                         if ($user->roleID == 5 )
                        {
                            $_SESSION['userName']=$user->userName;
                            $_SESSION['phone']=$user->phone;
                            $_SESSION['id']=$user->id;
                            return Response::json(['Success'=>true,'user'=>$user, 'message'=>''],200);
                        }
                    }
                    $user = null;
                    return Response::json(['Success'=>false,'user'=>$user, 'message'=>'يوجد خطأ ف البيانات'],200);
                }
                catch (Exception $e) {
                    return Response::json($e);
                }
            }
            $user = null;
            return Response::json(['Success'=>false,'user'=>$user,'message'=>'يوجد خطأ ف البيانات'],200);
        }
        catch (Exception $e) {
            return Response::json($e);
        }
    }


    public function delays()
    {
        $reports = Report::all();
        /*for loop and add arrry list put all it in it*/
        if($reports != null)
        {   
            $list = array();
            foreach ($reports as $report) {

                $obj = array();

                $obj['date'] = $report->date;
                $obj['phone'] = $report->Transfer->phone;
                array_push($list, $obj);              
            }                 

            return Response::json(['Success'=>true, 'reports'=>$list,'message'=>"Done"],200);
        }
        $reports =null;
        return Response::json(['Success'=>false,'reports'=>$reports,'message'=>"You Don't DO Any delays"],200);
    }
}