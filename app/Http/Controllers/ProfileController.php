<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
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
        // echo ("อัพโหลดเรียบร้อย...");
        $path=$request->file('img')->store('imgupload');
        return ['path'=>$path,'upload'=>'success'];
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
        // $users = DB::select('SELECT * FROM users WHERE id = ?',[$id]);
        // return view('profileuser',['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if (Auth::user()) {
            $users = User::find(Auth::user()->id);
            if ($users) {
                return view('profileuser')->withUser($users);
            }else{
                return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }

        //
        // $name = $request->input('name');
        // $gender = $request->input('gender');
        // $province = $request->input('province');
        // $username = $request->input('username');
        // $email = $request->input('email');
        // DB::update('UPDATE users SET name=?, gender=?, province=?, username=?, email=? WHERE id = ?',[$name,$gender,$province,$username,$email,$id]);
        // return redirect('profileuser')->with('success', 'อัพเดทข้อมูลเรียบร้อย');

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $users = User::find(Auth::user()->id);

        if ($users) {
            $validate = $request->validate([
                'name' => 'required|min:2',
                'gender' => 'required|min:2',
                'province' => 'required|min:2',
                'username' => 'required|min:2',
                'email' => 'required|email|unique:users'
                
            ]);
            $users->name = $request['name'];
            $users->gender = $request['gender'];
            $users->province = $request['province'];
            $users->username = $request['username'];
            $users->email = $request['email'];

            $users->save();
            return redirect()->back();
            return redirect('profile')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
