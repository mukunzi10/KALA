<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\citizen;
use App\Models\creme;
use App\Models\loyal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\Hash;

class MainController extends Controller
{
    public function index(){
        $count=DB::table('users')->count();
        $count1=DB::table('citizens')->count();
        $loyal1=DB::table('loyals')->count();
        return view('auth.login');

    }
    public function registration()

    {
        return view('auth.register');
    }
    public function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:7']);
        //return view('auth.register');
        $save=admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        if($save){
            return back()->with('success','Successfull Registered');

        }
        else{
            return back()->with('fail','Fails to Register');
        }

    }
    public function check(Request $request){

        $count=DB::table('users')->count();
        $count1=DB::table('citizens')->count();
        $loyal1=DB::table('loyals')->count();
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:14',
        ]);
        $userinfo=admin::where('email',$request->email)->first();
        if(!$userinfo){
            return back()->with('fail','We do not recorganize your email');

        }else{
            if(Hash::check($request->password, $userinfo->password)){
                $request->session()->put('LoggedUser',$userinfo->id);
                return redirect('dashboardee');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }

    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login1');

        }
    }
    public function dashboard()

    {
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin/dashboard',$data);
    }

}
