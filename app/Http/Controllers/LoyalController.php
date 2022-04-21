<?php

namespace App\Http\Controllers;
use App\Models\loyal;
use App\Models\User;
use App\Models\admin;
use Illuminate\auth;
use Illuminate\Support\facades\Validator;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LoyalController extends Controller
{
    public function index(){

        return view('admin.loyalsData');


    }
    public function loyalreView(){
        $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.loyalRegistration',$data);
    }
    public function store(Request $request){

        $validator=Validator::make($request->all(),[
            'fname'=>'required|string|min:4|max:14',
            'lname'=>'required|string|min:4|max:14',
            'gender'=>'required|string|min:1|max:6',
            'idno'=>'required|digits:16',
            'email'=>'required|string',
            'date'=>'required|string',
            'phone'=>'required|digits:10',
            'qualification'=>'required|string',


        ])->validate();
        $email=$request->email;
        $phone=$request->phone;
        $idno=$request->idno;
        if(DB::table('loyals')->where('email',$email)->exists())
        {
            return view('layal')->with('success','Loyal Have been Registered Alread Exist!..');

        }
        else{

            $staus=0;
           $query= loyal::create([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'gender' => $request->gender,
                'idno' => $request->idno,
                'email' => $request->email,
                'date' => $request->date,
                'phone' => $request->fname,
                'qualification' => $request->qualification,
                'status'=>$staus
            ]);
            $names=$request->fnam."".$request->lname;

            if($query)
            {
                $email=Str::random(10).'@gmail.com';
                $pass="password";
                $name=$request->fname;
                tap(User::create([
                    'name' => $name,
                    'email' =>$email ,
                    'password' => Hash::make($pass)]));

                // $key=config('app.sms_key');

                // $response=Http::withHeaders([
                //     'x-api-key'=>$key
                // ])->post('https://api.mista.io/sms',[
                //     'to'=>'25'.$request->phone,
                //     'from'=>'kawayacu12',
                //     'unicode'=>'0',
                //     'sms'=>$names." Thanks you Username is".$email."Password".$pass.".",
                //     'action'=>'send-sms'
                // ]);
                return redirect()->route('report')->with('success','loyal successfully Registered');

            }
        }


    }

public function view(){

    $loyal= loyal::latest()->paginate(5);
    $data=['LoggedUserInfo'=>admin::where('id','=',session('LoggedUser'))->first()];
    return view('admin.loyalsData',compact('loyal'),$data)


            ->with('i', (request()->input('page', 1) - 1) * 5);

    // return response()->json([
    //     'message'=>'Success data Exit',
    //     'data'=>$loyal,
    //     'status'=> 200, ]);
// }

}
}
