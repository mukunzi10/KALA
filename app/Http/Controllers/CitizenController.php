<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Validator;
use App\Models\citizen;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
class CitizenController extends Controller
{
    public function index(){
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.citizenreg',$data);

    }
    public function store(Request $request){

        $validator=Validator::make($request->all(),[
            'fname'=>'required|string|min:4|max:14',
            'lname'=>'required|string|min:4|max:14',
            'gender'=>'required|string|min:1|max:6',
            'phone'=>'required|digits:10',
            'province'=>'required|string',
            'district'=>'required|string',
            'sector'=>'required|string'

        ])->Validate();
        $phone=$request->phone;
        if(DB::table('citizens')->where('phone',$phone)->exists())
        {
            return redirect()->route('citizen')->with('success','Citizen Have been Registered Alread Exist!..');

        }
        else{

        citizen::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'province' => $request->province,
            'district' => $request->district,
            'sector' => $request->sector,
            'phone' => $request->phone


        ]);
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];


        return redirect()->route('cRegistratio')->with('continue...');
    }
    return view('andmin.citizzzenReg',$data);

    }


    public function view(){
        $citizen= citizen::latest()->paginate(5);
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.citizenData',compact('citizen'),$data)

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function edit( $id){
        $citizen=citizen::find($id);
        return view('admin.edit1',compact('citizen'));
    }
   
}
