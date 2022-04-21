<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loyal;
use App\Models\admin;
use App\Models\User;
use App\Models\citizen;
use Illuminate\Support\Str;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;
use DataTables;

class LoyalsController extends Controller
{

    public function index(Request $request)
    {
        $data=loyal::latest()->get();
        // $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];

        if ($request->ajax()) {
            $data = loyal::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class=" btn btn-info btn-sm edit"><span class="mdi mdi-border-color"></span</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-warning btn-sm delete">   <span class="mdi mdi-close-circle"></span></a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }

        return view('admin.loyalData1',compact('data'));
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

        $request->validate([
            'fname'=>'required|string|min:4|max:14',
            'lname'=>'required|string|min:4|max:14',
            'gender'=>'required|string|min:1|max:6',
            'idno'=>'required|digits:16',
            'email'=>'required|string',
            'date'=>'required|string',
            'phone'=>'required|digits:10',
            'qualification'=>'required|string',
        ]);
            $staus=0;
            $query=Loyal::updateOrCreate(['id'=>$request->id],
             [
                'fname' => $request->fname,
                'lname' => $request->lname,
                'gender' => $request->gender,
                'idno' => $request->idno,
                'email' => $request->email,
                'date' => $request->date,
                'phone' => $request->phone,
                'qualification' => $request->qualification,
                'status'=>$staus
            ]);

                return response()->json(
                    ['success'=>'success','loyal successfully Registered']);

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
    public function edit($id)
    {
        $data = Loyal::find($id);
                return response()->json($data);
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
        loyal::find($id)->delete();

            return response()->json([
                'success' => true,
                'message'=>'Loyal deleted successfully.']);
    }
}
