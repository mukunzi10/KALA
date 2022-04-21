<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\facades\Auth;
use App\Models\citizen;
use App\Models\creme;
use App\Models\loyal;
use App\Http\Controllers\CitizenControlle;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){
        $count=DB::table('users')->count();
        $count1=DB::table('citizens')->count();
        $loyal1=DB::table('loyals')->count();

        // $loyal= loyal::all();
        // $cremes=DB::table('cremes')->join('loyals','loyals.id','cremes.cre_id')->join('citizens','citizens.id','cremes.cre_id')
        // ->get();


            return view('admin.dashboard',compact('count','count1','loyal1'));


    }
}
