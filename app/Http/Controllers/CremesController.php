<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Validator;
use App\Models\citizen;
use App\Models\creme;
use App\Models\loyal;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
class CremesController extends Controller
{


    public function index(){
        $data=citizen::all();
        $loyal= loyal::all();
        $cremes=DB::table('cremes')->join('loyals','loyals.id','cremes.id')->join('citizens','citizens.id','cremes.cit_id')
        ->get();
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];

        return view('admin.testmony',compact('data','loyal','cremes'),$data);
    }
    public function create(){
        $data=citizen::all();
        $loyal= loyal::all();
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.cremeReg',compact('data','loyal'),$data);

    }

    public function store(Request $request){

        $validator=Validator::make($request->all(),[
                'title'=>'required|string',
                'description'=>'required|string',
                'file' => 'required'
               ])->validate();


            $path = $request->file('file')->store('public/files');


            $query=creme::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'cit_id'=>$request->cit_id,
                'id'=>$request->id,
                'file'=>$path
            ]);
            $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
            return view('admin.citizenData',$data)->with('success',"Testmony Published Now");

    }
    public function show($id){
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
        $cremes=creme::find($id);


        return view('citizenshow',compact('cremes'),$data);

    }
}
