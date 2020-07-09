<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Datauser;
use App\Dataproject;
use App\Datalist;
use App\User;
use App\Dataupload;
use App\Datafileupload;
use App\Http\Controllers;

class ListdataController extends Controller
{
    //
    public function Datalist() {
        $data = DB::select('SELECT * FROM users');
        return view('datauser', ['data'=>$data]);
    }
    public function Datalistadmin() {
        $dataadmin = DB::select('SELECT * FROM admin_company');
        return view('dataadmin', ['dataadmin'=>$dataadmin]);
    }

    public function Datalistproject() {
        // $dataproject = DB::select('SELECT * FROM addproject');
        $dataproject = Dataproject::all();
        return view('dataproject', ['dataproject'=>$dataproject]);
    }

    public function Data() {
        $datas = Datalist::all();
        return view('homeBD', ['datas'=>$datas]);
    }

    public function Newarrivaldata() {
        $datas = Datalist::all();
        return view('pagewedsum.Newarrival', ['datas'=>$datas]);
    }

    function adduser(Request $request) {
        $userdata = new User;
        $userdata->name=$request->name;
        $userdata->gender=$request->gender;
        $userdata->province=$request->province;
        $userdata->email=$request->email;
        $userdata->username=$request->username;
        $userdata->password=$request->password;
        $userdata->save();
        return redirect('dataview')->with('success', 'เพิ่มข้อมูลเรียบร้อย');

        // print_r($request->input());
    }



    function addproject(Request $request) {

        //ดึงข้อมูลจาก textbox เข้า
        $dataproject = new Dataproject;
        $dataproject->project_name=$request->project_name;
        $dataproject->keyword_project=$request->keyword_project;
        $dataproject->des_project=$request->des_project;
        // $dataproject->facebook=$request->facebook;
        // $dataproject->email=$request->email;
        // $dataproject->phone=$request->phone;
        $dataproject->type_project=$request->type_project;
        $dataproject->genre_project=$request->genre_project;
        $dataproject->category_project=$request->category_project;
        $dataproject->branch_project=$request->branch_project;
        $dataproject->save();

        // $this->validate($request,
        // ['fileimgToUpload' => 'required|image|mimes:png,jpeg|max:5048',
        // 'fileToUpload' => 'required|file|mimes:pdf']);
        
        // //upload
        // $filename = $request->file('fileimgToUpload')->getClientOriginalName();
        // $nameimg = rand() . '.' . $filename;
        // $pathimg = $request->file('fileimgToUpload')->storeAs('imgupload',$nameimg);
        // $fileimg = new Dataupload;
        // $fileimg->name_file = $pathimg;
        // // $fileimg->originname_file = $filename;
        // $fileimg->save();
   
        // $fileprojectname = $request->file('fileToUpload')->getClientOriginalName();
        // $namefileproject = rand() . '.' . $fileprojectname;
        // $pathfile = $request->file('fileToUpload')->storeAs('fileupload',$namefileproject);
        // $fileproject = new Datafileupload;
        // $fileproject->name_fileproject = $pathfile;
        // $fileproject->save();

        return redirect('homeBD')->with('successappproject', 'สร้างผลงานเรียบร้อย');
        // echo $filename;
        


        
        // echo $pathimg;

        
        // return redirect('submit')->with('success', 'เพิ่มข้อมูลเรียบร้อย');

        // print_r($request->input());
    }

    public function destroy($id) {
        DB::delete('DELETE FROM users WHERE id=?',[$id]);
        return redirect('dataview')->with('success', 'ลบข้อมูลเรียบร้อย'); 
    }

    public function deleteadmin($id) {
        DB::delete('DELETE FROM admin_company WHERE admin_company_id=?',[$id]);
        return redirect('viewadmin')->with('success', 'ลบข้อมูลเรียบร้อย'); 
        
    }

    public function deleteproject($id) {
        DB::delete('DELETE FROM addproject WHERE project_id=?',[$id]);
        return redirect('viewproject')->with('success', 'ลบข้อมูลเรียบร้อย'); 
        
    }

    public function addfileproject(Request $request)
    {
        //
        // echo ("อัพโหลดเรียบร้อย...");
        $path=$request->file('fileimgToUpload')->store('imgupload');
        $pathfile=$request->file('fileToUpload')->store('fileupload');
        return ['path'=>$path,$pathfile,'upload'=>'success'];
    }
    
}

