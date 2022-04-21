<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizen;
use App\Models\admin;
use App\Http\Controllers\MainController;

class CitizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $citizen= citizen::latest()->paginate(5);
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.citizenData',compact('citizen'),$data)

            ->with('i', (request()->input('page', 1) - 1) * 5);
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


        return redirect()->route('cRegistratio')->with('continue...');
    }

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(  $citizen)
    {
        $hh=citizen::find(1);
        return view('admin.edit1',compact('hh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
