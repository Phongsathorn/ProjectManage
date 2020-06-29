<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

class logintestController extends Controller
{
    //

    

    public function index(){
        return view('auth.login');
    }
    public function chkauthen(Request $request){
        $username = @$_POST['username'];
        if($username == 'Aadmin') {
            $res_chk_admin_company = DB::table('admin_company')->select('*')->where([
                ['admin_company_user', '=', $username]
                ])->get();
                session(['admin_company_id' => $res_chk_admin_company[0]->admin_company_id]);
                session(['admin_company_user' => $res_chk_admin_company[0]->admin_company_user]);
                session(['admin_company_name' => $res_chk_admin_company[0]->admin_company_name]);
                
                return redirect('admin')->with('successlogintest' , 'ยินดีต้อนรับเข้าสู่ระบบ');
        }else {
            $res_chk_user = DB::table('users')->select('*')->where([
                ['username', '=', $username]
                ])->get();
                function __construct(){
                    $this->middleware('guest')->except('logout');
                }
                return redirect('homeBD')->with('successhomeuser' , 'ยินดีต้อนรับเข้าสู่ระบบ');
        }
                
           
            
            // }
            // return redirect('homeBD')->with('successhomeuser');
            // $res_chk_user = DB::table('users')->select('*')->where([
            //     ['username', '=', $username]
            //     ])->get();
            //     echo $res_chk_user;


                // session(['id' => $res_chk_user[0]->id]);
                // session(['username' => $res_chk_user[0]->username]);
                // session(['name' => $res_chk_user[0]->name]);
                
                
        }
        

            // echo $res_chk_admin_company;
        // @$dbpass = $res_chk_admin_company[0]->company_account_pass;       
            
    }
   

