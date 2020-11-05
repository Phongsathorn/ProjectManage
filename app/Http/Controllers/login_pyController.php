<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Session;

use nusoap_client;

class login_pyController extends Controller{


    public function authentication(Request $request){
        
    


        // require('dbconnect.php');
        session_start();
        
        $user = base64_encode(@$_POST['username']);
        $pass = base64_encode(@$_POST['password']);
        $user_log = $_POST['username'];
        // echo $username;
        $pass_log = $_POST['password'];
        $chackadmin = "SELECT * FROM admin_company WHERE admin_user = '$user_log' and admin_pass = '$pass_log'";
        $countadmin = count(DB::select("SELECT * FROM admin_company WHERE admin_user = '$user_log' and admin_pass = '$pass_log'"));

        if($countadmin > 0 ){
            // echo 'ok';
            print_r('admin');
            $condb = mysqli_query($conn,$chackadmin);
            $dataadmin = mysqli_fetch_assoc($condb);
            if(isset($dataadmin['admin_pass']) ? $dataadmin['admin_pass']:''){
                $_SESSION['adminid'] = $dataadmin['admin_id'];
                $_SESSION['adminauser'] = $dataadmin['admin_user'];
                $_SESSION['adminname'] = $dataadmin['admin_name'];
                $_SESSION['adminemail'] = $dataadmin['admin_email'];
                $_SESSION['pathimg'] = $dataadmin['pathimg'];
                $_SESSION['statusA'] = $dataadmin['status'];
                $_SESSION['successloginadmin'] = "successloginadmin";
            
                $iduser = $_SESSION['adminid'];
                $chk_idpro = "SELECT * FROM admin_company WHERE admin_company.admin_pass='$iduser'";
                $condb = mysqli_query($conn,$chk_idpro);
                $dataadmin = mysqli_fetch_assoc($condb);
                
                if($dataadmin){
                    $_SESSION['admin'] = 'admin';
                }

                // $_SESSION['message'] = "successlogin";
                // header( "refresh: 0; url=/homeadmin" );
                // exit(0);
            }else{
                $_SESSION['notpass'] = "null";
                // return back();
                // header( "refresh: 0; url=/homeBD" );
                // exit(0);
            }
            

        }

        else {

            /*********************** AuthenService **************************/
            $wsdl = "https://ws.up.ac.th/mobile/AuthenService.asmx?WSDL";
            $method = "Login.";
            $soapaction = "http://tempuri.org/Login";
            $body = '<Login xmlns="http://tempuri.org/">';
            $body .= '<username>'.$user.'</username>';
            $body .= '<password>'.$pass.'</password>';
            $body .= '<ProductName>ictcoopsystem</ProductName>';
            $body .= '</Login>';
            
            
            $client = new \nusoap_client($wsdl, false);
            $client->decode_utf8 = false;
            $mysoapmsg = $client->serializeEnvelope($body,'',array(),'document','literal');	
            $response = $client->send($mysoapmsg,$soapaction);
            $result = $response['LoginResult'];
            $_SESSION['SID'] = $result ;
            /*********************** AuthenService **************************/
            
            
            // teacher,staff,teacher,director login
            if(!is_numeric($user_log) ){
                

                        /*********************** GetStaffInfo **************************/
                        $wsdl = "https://ws.up.ac.th/mobile/StaffService.asmx?op=GetStaffInfo";
                        $method = "GetStaffInfo";
                        $soapaction = "http://tempuri.org/GetStaffInfo";
                        $body = '<GetStaffInfo   xmlns="http://tempuri.org/">';
                        $body .= '<sessionID>'.$_SESSION['SID'].'</sessionID>';
                        $body .= '</GetStaffInfo >';
        
                        $client = new \nusoap_client($wsdl, false);
                        $client->decode_utf8 = false;
                        $mysoapmsg=$client->serializeEnvelope($body,'',array(),'document','literal');	
                        $response=$client->send($mysoapmsg,$soapaction);
                        $result = $response['GetStaffInfoResult'];
                        /*********************** GetStaffInfo **************************/
                        var_dump($result);
                        die();
        
        
                        session(['username' => $username]);
                        session(['FirstName_TH' => $result['FirstName_TH']]);
                        session(['LastName_TH' => $result['LastName_TH']]);
                        session(['Department' => $result['Department']]);
                        session(['Faculty' => $result['Faculty']]);
                        session(['Status' => $result['Status']]);
                        session(['GroupType' => $result['GroupType']]);
                        session(['logged_in' => "1"]);            
            }

            // studentlogin
            else{
                /*********************** GetStudentInfo **************************/
                    $wsdl = "https://ws.up.ac.th/mobile/StudentService.asmx?WSDL";
                    $method = "GetStudentInfo";
                    $soapaction = "http://tempuri.org/GetStudentInfo";
                    $body = '<GetStudentInfo   xmlns="http://tempuri.org/">';
                    $body .= '<sessionID>'.$_SESSION['SID'].'</sessionID>';
                    $body .= '</GetStudentInfo >';

                    
                    $client = new \nusoap_client($wsdl, false);
                    $client->decode_utf8 = false;
                    $mysoapmsg=$client->serializeEnvelope($body,'',array(),'document','literal');	
                    $response=$client->send($mysoapmsg,$soapaction);
                    $result = $response['GetStudentInfoResult'];
                /*********************** GetStudentInfo **************************/

                    var_dump($result);
                    die();
                    
                    $_SESSION['usersid'] = $datauser['U_id'];
                    $_SESSION['usernameguest'] = $datauser['username'];
                    $_SESSION['nameuser'] = $datauser['name'];
                    $_SESSION['emailuser'] = $datauser['email'];
                    $_SESSION['pathimg'] = $datauser['pathimg'];
                    $_SESSION['status'] = $datauser['status'];

                    session(['StudentCode' => $result['StudentCode']]);
                    session(['Title' => $result['Title']]);
                    session(['FirstName_TH' => $result['FirstName_TH']]);
                    session(['LastName_TH' => $result['LastName_TH']]);
                    session(['ProgramName_TH' => $result['ProgramName_TH']]);
                    session(['FacultyName_TH' => $result['FacultyName_TH']]);
                    session(['CurrentStatus' => $result['CurrentStatus']]);
                    session(['status_login' => "2"]);
                    session(['logged_in' => "1"]);
                    session(['user' => $result['StudentCode']]);
                    session(['name_stu' => $result['Title'].$result['FirstName_TH']."  ".$result['LastName_TH']]);





                    
            }





            $chackuser = "SELECT * FROM users WHERE username = '$user_log' and password = '$pass_log'";
            // echo $chackuser;
            // $condb = mysqli_query($conn,$chackuser);
            // $datauser = mysqli_fetch_assoc($condb);
            if(isset($datauser['password']) ? $datauser['password']:''){
                $_SESSION['usersid'] = $datauser['U_id'];
                $_SESSION['usernameguest'] = $datauser['username'];
                $_SESSION['nameuser'] = $datauser['name'];
                $_SESSION['emailuser'] = $datauser['email'];
                $_SESSION['pathimg'] = $datauser['pathimg'];
                $_SESSION['status'] = $datauser['status'];

                $iduser = $_SESSION['usersid'];
                $chk_idpro = "SELECT * FROM projects WHERE projects.user_id='$iduser'";
                $condb = mysqli_query($conn,$chk_idpro);
                $dataproject = mysqli_fetch_assoc($condb);
            
                if($dataproject){
                    $_SESSION['project'] = 'BD';
                }

                $_SESSION['message'] = "successlogin";
                // header( "refresh: 0; url=/homeBD" );
                // exit(0);
            }else{
                $_SESSION['notpass'] = "null";
                // header( "refresh: 0; url=/homeBD" );
                // exit(0);
            }

        }
        
    }
}
