<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizen;
use DataTables;

class PostControlle extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data=citizen::latest()->get();
        if ($request->ajax()) {
            $data = citizen::latest()->get();
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

        return view('index',compact('data'));
    }
        public function store(Request $request){
            $citizen=citizen::updateOrCreate(['id'=>$request->id],
            ['fname'=>$request->fname,
            'lname'=>$request->lname,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'province'=>$request->province,
            'district'=>$request->district,
            'sector'=>$request->sector
        ]);
            return response()->json(
                ['success'=>'Client Success Fully Added ']);
        }

        public function edit($id)
            {
                $citizen = citizen::find($id);
                return response()->json($citizen);
            }


        public function destroy($id)
        {
            citizen::find($id)->delete();

            return response()->json([
                'success' => true,
                'message'=>'citizen deleted successfully.']);
        }
    }
