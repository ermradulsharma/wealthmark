<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Imports\GiftCardImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }



    public function check_login()
    {
        if (Auth::User()->account_type == 3) {
            return redirect("/admin/admin_dashboard");
        } else {
            return redirect("/admin/admin_login");
        }
    }

    public function admin_login()
    {
        //$this->check_login();
        return view('admin.login');
    }

    public function admin_dashboard()
    {
        if (@Auth::User()->account_type == 3) {
            $this->check_login();
            return view('admin.admin-dashboard');
        } else {
            echo "can't access this page";
        }
    }

    public function manage_chat()
    {
        //$this->check_login();
        return view('admin.manage-chat');
    }

    public function manage_order()
    {
        // $this->check_login();
        return view('admin.manage-order');
    }

    //commented on 05032023
    /*
    public function manage_gift_card(Request $request){


      // print_r($permission);

        if(Auth::User()->account_type==3){
            if($request->filter_email!=""){
                $giftcard = giftcard::orderBy('id', 'DESC')->where('Gift_Card_email', '=', $request->filter_email)->paginate(20);
                return view('admin.manage-gift-card',compact('giftcard'));
            }

            elseif($request->filter_phone!=""){
                $giftcard = giftcard::orderBy('id', 'DESC')->where('Gift_Card_phone', '=', $request->filter_phone)->paginate(20);
                return view('admin.manage-gift-card',compact('giftcard'));
            }

            elseif($request->filter_date!=""){
                $filter_date=explode(" - ",$request->filter_date);
                $from=str_replace("/","-",$filter_date[0]);
                $to=str_replace("/","-",$filter_date[1]);
                $from=date("Y-m-d", strtotime($from));
                $to=date("Y-m-d", strtotime($to));
                $giftcard = giftcard::orderBy('id', 'DESC')->whereBetween('created_at', [$from, $to])->paginate(20);
                return view('admin.manage-gift-card',compact('giftcard'));
            }

            elseif($request->filter_status!=""){
                $giftcard = giftcard::orderBy('id', 'DESC')->where('Gift_Card_Status', '=', $request->filter_status)->paginate(20);
                return view('admin.manage-gift-card',compact('giftcard'));
            }

            elseif($request->filter_amount!=""){
                $giftcard = giftcard::orderBy('id', 'DESC')->where('Gift_Card_Amount', '=', $request->filter_amount)->paginate(20);
                return view('admin.manage-gift-card',compact('giftcard'));
            }
            else{
                $giftcard = giftcard::orderBy('id', 'DESC')->paginate(20);
                return view('admin.manage-gift-card',compact('giftcard'));
            }
        }else{
            echo"can't access this page";
        }
    }


     public function generate_gift_card(Request $request){
        if(Auth::User()->account_type==3){
            if($_POST){
                $data=array();
                $random = array();
                $random_pin = array();
                $no=$_POST['no_of_gift_card'];
                for ($i = 0; $i < $no; $i++) {
                    $string1="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    $string=$string1;
                    $string= str_shuffle($string);
                    $end = date('Y-m-d', strtotime('+1 years'));
                    $record=array(
                        'Gift_Card_Uploader_User_Id'=>Auth::user()->id,
                    	'Gift_Card_phone'=>$_POST['phone'],
                    	'Gift_Card_email'=>$_POST['email'],
                    	'Gift_Card_Voucher_no'=>"WEB".$random[$i] = substr($string,0,13),
                    	'Gift_Card_Voucher_pin'=>$random_pin[$i] = rand(100000,999999),
                    	'created_at'=>date("Y-m-d H:i:s"),
                    	'Gift_Card_Expiration_date'=>$_POST['exp_date'],
                    	'Gift_Card_Status'=>$_POST['status'],
                    	'Gift_Card_Amount'=>$_POST['amount']
                    	);
                    $data=giftcard::insert($record);
                }
                if($data){
                    echo $msg="1";
                }else{

                    echo $msg="0";
                }
            }
        }else{
            echo"can't access this page";
        }
    }

    public function import_gift_card(Request $request)
    {
        if(Auth::User()->account_type==3){
            $this->check_login();
            $data=Excel::import(new GiftCardImport, $request->file('uploadexcel')->store('temp'));
            if($data){
                echo $msg="1";
            }else{

                echo $msg="0";
            }
        }else{
            echo"can't access this page";
        }
    }

*/
    //end commented on 05032023

    public function new_chat(Request $request)
    {
        echo 'manage order';
    }
}
