<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizen;
use App\Models\creme;
use App\Models\loyal;
use Illuminate\Support\Facades\DB;

class Index extends Controller
{
    public function index($page = "home")
    {
        $result['page'] = $page;
        $data=creme::latest()->get();
        return view('index', $result,compact('data'));
    }
    public function about($page = "about")
    {
        $result['page'] = $page;
        return view('about', $result);
    }
    public function services($page = "services")
    {
        $result['page'] = $page;
        return view('services', $result);
    }
    public function team($page = "team")
    {
        $result['page'] = $page;
        return view('team', $result);
    }
    public function contact($page = "contact")
    {
        $result['page'] = $page;
        return view('contact', $result);
    }
    public function gg(){
        $data=citizen::all();
        $loyal= loyal::all();
        $cremes=DB::table('cremes')->join('loyals','loyals.id','cremes.cre_id')->join('citizens','citizens.id','cremes.cre_id')
        ->get();
        return view('index',compact('data','loyal','cremes'));
    }

    public function more($page = "DATA"){
        $result['page'] = $page;
        return view('admin.more',$result);
    }

}
